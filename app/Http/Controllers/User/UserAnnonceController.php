<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAnnonceController extends Controller
{
    // Show List of ads for user
    public function index()
    {
        return view('annonces');
    }

    // Create  New Ad Form for user
    public function create()
    {
        $Partscat = \App\PieceCat::with('pieces')->get();
        return view('addAds', compact('Partscat'));
    }

    // Store The created ad for user
    public function store(Request $request)
    {
        Auth::user()->annonces()->create([
            'annonce_type' => $request->ad_type,
            'annonce_desc' => $request->ad_desc,
            'modele_id' => $request->,
            'modele_annee' => $request->,
        ]);
        return "ok";
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
