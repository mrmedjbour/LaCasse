<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contactAd(Request $request)
    {
        Validator::make($request->all(), array(
            'ad' => 'required|exists:annonce,annonce_id',
            'message' => 'required|string',
            'part' => Rule::requiredIf(function () use ($request) {
                return \App\Annonce::findOrFail($request->ad)->annonce_type == "buy";
            }),
        ))->validate();
        $ads = Annonce::findOrFail($request->ad);
        $user = Auth::user();
        return $ads->annonce_type;
    }
}
