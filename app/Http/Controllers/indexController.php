<?php

namespace App\Http\Controllers;

use App\Marque;
use App\Piece;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $parts = cache()->remember('allPartsindex', 60 * 60 * 48, function () {
            return Piece::get();
        });
        $marques = cache()->remember('allMarques', 60 * 60 * 48, function () {
            return Marque::all();
        });
        $marques = $marques->random(7);
        return view('index', compact(['parts', 'marques']));
    }
}
