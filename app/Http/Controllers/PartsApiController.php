<?php

namespace App\Http\Controllers;

use App\Piece;
use App\PieceCat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PartsApiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('all')) {
            $partsCat = cache()->remember('PartsWithCat', 60 * 60 * 48, function () {
                return PieceCat::with('pieces')->get();
            });
            echo "<option disabled hidden selected>Select Part</option>";
            foreach ($partsCat as $parts) {
                echo "<optgroup label=\"" . Str::title($parts->cat_nom) . "\">";
                foreach ($parts->pieces as $part) {
                    $piece_nom = Str::title($part->piece_nom);
                    echo "<option value=\"$part->piece_id\">$piece_nom</option>";
                }
                echo "</optgroup>";
            }
            return;
        } elseif ($request->has('allParts')) {
            $partsCat = cache()->remember('PartsWithCat', 60 * 60 * 48, function () {
                return PieceCat::with('pieces')->get();
            });
            foreach ($partsCat as $parts) {
                echo "<li class=\"font-weight-bold\">" . Str::title($parts->cat_nom) . "</li>";
                foreach ($parts->pieces as $part) {
                    echo "<li data-type=\"part\" data-id=\"" . $part->piece_id . "\">" . Str::title($part->piece_nom) . "</li>";
                }
            }
            return;
        } elseif ($request->has('Years')) {
            for ($y = date('Y'); $y >= 1950; $y--) {
                echo "<li data-type=\"year\" data-id=\"" . $y . "\">" . $y . "</li>";
            }
            return;
        } else {
            if ($request->filled(['cat', 'part'])) {
                $part = cache()->remember('PartsWithCatOf' . $request->part . 'p', 60 * 60 * 48, function () use ($request) {
                    return Piece::findOrFail($request->part);
                });
                $cat_nom = $part->cat()->get('cat_nom')[0]->cat_nom;
                $part['cat_nom'] = $cat_nom;
                return response()->json($part);
            } elseif ($request->filled(['cat'])) {
                $parts = cache()->remember('PartsOf' . $request->cat . 'Cat', 60 * 60 * 48, function () use ($request) {
                    return PieceCat::findOrFail($request->cat)->pieces()->get(['piece_id', 'piece_nom']);
                });
                return response()->json($parts);
            } else {
                $AllCatsParts = cache()->remember('AllCatOfParts', 60 * 60 * 48, function () {
                    return PieceCat::get(['cat_id', 'cat_nom']);
                });
                return response()->json($AllCatsParts);
            }
        }
    }
}
