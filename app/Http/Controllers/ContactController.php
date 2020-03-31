<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
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

        $title = $ads->modele->marque->marque_nom . ' ' . $ads->modele->modele_nom;
        if ($ads->modele_annee) {
            $title = $title . ' - ' . $ads->modele_annee;
        }
        if ($request->part) {
            $part = $ads->pieces->where('piece_id', $request->part)->first();
            $title = $part->piece_nom . ' ' . $title;
        }
        if ($ads->annonce_type == "buy" and $ads->pieces->count() == 1) {
            $title = $ads->pieces->first()->piece_nom . ' ' . $title;
        }

        $user = Auth::user();

        $desc = $user->desc()->firstOrCreate(
            ['disc_titre' => Str::title($title), 'annonce_id' => $ads->annonce_id]
        );

        $msg = $desc->msg()->create([
            'msg_contenu' => $request->message,
            'user_id' => $user->user_id,
        ]);
        if ($msg) {
            return response()->json([
                "success" => true,
                "message" => "sent",
                "disc" => $msg->disc_id
            ]);
        }
        return response()->json(["success" => false, "message" => "can't send message"], 404);
    }
}










