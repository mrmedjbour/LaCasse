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
                return Annonce::findOrFail($request->ad)->annonce_type == "sell";
            }),
        ))->validate();

        $ads = Annonce::findOrFail($request->ad);

        if ($request->part) {
            $part = $ads->pieces->where('piece_id', $request->part);
        }

        $user = Auth::user();


        return response()->json($part);
    }
}










