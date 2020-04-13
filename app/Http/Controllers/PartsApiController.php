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
            $partsCat = PieceCat::with('pieces')->get();
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
            $partsCat = PieceCat::with('pieces')->get();
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
                $part = Piece::findOrFail($request->part);
                $cat_nom = $part->cat()->get('cat_nom')[0]->cat_nom;
                $part['cat_nom'] = $cat_nom;
                return response()->json($part);
            } elseif ($request->filled(['cat'])) {
                $parts = PieceCat::findOrFail($request->cat)->pieces()->get(['piece_id', 'piece_nom']);
                return response()->json($parts);
            } else {
                return response()->json(PieceCat::get(['cat_id', 'cat_nom']));
            }
        }
    }
}
