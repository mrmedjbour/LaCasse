<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        Validator::make($request->all(), array(
            'ad_type' => ['required', Rule::in(['sell', 'buy']),],
            'ad_desc' => 'max:500',
            'parts' => 'required|array',
            'parts.*' => 'exists:piece,piece_id',
            'Modele_id' => 'required|exists:modele,modele_id',
            'ModeleYear' => 'integer|min:1961|max:2020',
            'images.*' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048'
        ))->validate();

        $ad = Auth::user()->annonces()->create([
            'annonce_type' => $request->ad_type,
            'annonce_desc' => $request->ad_desc,
            'modele_id' => $request->Modele_id,
            'modele_annee' => $request->ModeleYear,
        ]);

        $ad->pieces()->sync($request->parts);

        return redirect(route('annonce.index'));
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
