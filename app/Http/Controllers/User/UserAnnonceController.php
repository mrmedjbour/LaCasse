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
        $ads = Auth::user()->annonces()->with('modele')->get();
        return view('annonces', compact('ads'));
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
            'images.*' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ))->validate();
        $ad = Auth::user()->annonces()->create([
            'annonce_type' => $request->ad_type,
            'annonce_desc' => $request->ad_desc,
            'modele_id' => $request->Modele_id,
            'modele_annee' => $request->ModeleYear,
        ]);
        $ad->pieces()->sync($request->parts);
        if ($request->ad_type == "sell") {
            if ($images = $request->file('images')) {
                foreach ($images as $image) {
                    if (in_array($image->extension(), ['jpeg', 'png', 'jpg', 'bmp', 'gif', 'svg'])) {
                        $image_name = $ad->annonce_id . '_' . rand(1000000, 99999999) . '.' . $image->extension();
                        $image->move(public_path('/files/annonce/'), $image_name);
                        $image_data['img_nom'] = $image_name;
                        $images_data[] = $image_data;
                    }
                }
                $ad->images()->createMany($images_data);
            }
        }
        return redirect(route('annonce.index'))->with('success', 'Your Ad has been successfully added');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return "edit";
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        Auth::user()->annonces()->findOrFail($request->modele_id)->delete();
        return redirect(route('annonce.index'))->with('success', 'Your Ad has been successfully deleted');
    }
}
