<?php

namespace App\Http\Controllers\User;

use App\Annonce;
use App\Http\Controllers\Controller;
use App\PieceCat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserAnnonceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('hasAccess:1,2,4,5')->only(['store', 'create']);
    }

    // Show List of ads for user
    public function index()
    {
        if (Auth::user()->role_id == 1) {
            $ads = Annonce::orderBy('annonce_date', 'DESC')->paginate(20);
            return view('admin.annonces', compact('ads'));
        }
        $contactId = Auth::id();
        if (Auth::user()->isEmployee()) {
            $contactId = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first()->user_id;
        }
        $ads = Annonce::where('user_id', $contactId)->orderBy('annonce_date', 'DESC')->paginate(20);
        return view('annonces', compact('ads'));
    }

    // Create  New Ad Form for user
    public function create()
    {
        $Partscat = PieceCat::with('pieces')->get();
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

        if (Auth::user()->isEmployee()) {
            $contactId = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first()->user_id;
            $ad = User::findOrFail($contactId)->annonces()->create([
                'annonce_type' => $request->ad_type,
                'annonce_desc' => $request->ad_desc,
                'modele_id' => $request->Modele_id,
                'modele_annee' => $request->ModeleYear,
            ]);
        } else {
            $ad = Auth::user()->annonces()->create([
                'annonce_type' => $request->ad_type,
                'annonce_desc' => $request->ad_desc,
                'modele_id' => $request->Modele_id,
                'modele_annee' => $request->ModeleYear,
            ]);
        }
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
        if (Auth::user()->role_id == 1) {
            $ad = Annonce::with(['modele', 'images'])->findOrFail($id);
            return view('admin.viewAd', compact('ad'));
        }
        return redirect(route('annonce.edit', $id));
    }

    public function edit($id)
    {
        $correntUser = Auth::user();
        if (Auth::user()->isEmployee()) {
            $correntUser = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first();
        }
        $ad = $correntUser->annonces()->with(['modele', 'images'])->findOrFail($id);
        return view('editAds', compact('ad'));
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->role_id == 1) {
            $ad = Annonce::findOrFail($id);
        } else {
            $correntUser = Auth::user();
            if (Auth::user()->isEmployee()) {
                $correntUser = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first();
            }
            $ad = $correntUser->annonces()->findOrFail($id);
        }
        Validator::make($request->all(), array(
            'ad_desc' => 'max:500',
            'parts.*' => 'exists:piece,piece_id',
            'Modele_id' => 'exists:modele,modele_id',
            'ModeleYear' => 'integer|min:1960|max:2020',
            'images.*' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ))->validate();
        if ($request->Modele_id) {
            $ad->modele_id = $request->Modele_id;
        } elseif ($request->ModeleYear) {
            $ad->modele_annee = $request->ModeleYear;
        } elseif ($request->ad_desc) {
            $ad->annonce_desc = $request->ad_desc;
        }
        $ad->save();
        $ad->pieces()->sync($request->parts);
        if ($ad->annonce_type == "sell") {
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
        return redirect(route('annonce.index'))->with('success', 'Your Ad has been successfully updated');
    }

    public function destroy(Request $request)
    {
        if (Auth::user()->role_id == 1) {
            if ($request->option == "block") {
                $ad = Annonce::findOrFail($request->ad_id);
                $ad->annonce_etat = !$ad->annonce_etat;
                $ad->save();
                if ($ad->annonce_etat == true) {
                    $status = "unblocked";
                } else {
                    $status = "blocked";
                }
                return redirect(route('annonce.index'))->with('success', "Ad has been successfully $status");
            }
            Annonce::findOrFail($request->ad_id)->delete();
            return redirect(route('annonce.index'))->with('success', 'Ad has been successfully deleted');
        }
        $correntUser = Auth::user();
        if (Auth::user()->isEmployee()) {
            $correntUser = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first();
        }
        $correntUser->annonces()->findOrFail($request->ad_id)->delete();
        return redirect(route('annonce.index'))->with('success', 'Your Ad has been successfully deleted');
    }
}