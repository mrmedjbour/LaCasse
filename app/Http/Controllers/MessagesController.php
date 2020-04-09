<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function messages($disc = null)
    {
        $contact_id = Auth::id();
        if (Auth::user()->isEmployee()) {
            $contact_id = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first()->user_id;
        }
        $descs = Discussion::with('latestmsg')
            ->where('user_id', $contact_id)
            ->orWhereHas('ad', function (Builder $query) use ($contact_id) {
                $query->where('user_id', $contact_id);
            })
            ->orderByDesc('disc_stamp')
            ->get();
        $msgs = null;
        if ($disc) {
            $msgs = Discussion::with(['msg'])->where('disc_id', $disc)
                ->where('user_id', $contact_id)
                ->orWhereHas('ad', function (Builder $query) use ($contact_id) {
                    $query->where('user_id', $contact_id);
                })
                ->find($disc);
        }
        return view('messages', compact(['descs', 'contact_id', 'msgs']));
    }

    public function discussion(Request $request)
    {
        if ($request->get != "discussion") {
            abort(404);
        }
        $contact_id = Auth::id();
        if (Auth::user()->isEmployee()) {
            $contact_id = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first()->user_id;
        }
        $descs = Discussion::with('latestmsg')
            ->where('user_id', $contact_id)
            ->orWhereHas('ad', function (Builder $query) use ($contact_id) {
                $query->where('user_id', $contact_id);
            })
            ->orderByDesc('disc_stamp')
            ->get();
        return view('msg.contacts', compact(['descs', 'contact_id']));
    }

    public function fetch(Request $request)
    {
        if ($request->get != "messages") {
            abort(404);
        }
        $contact_id = Auth::id();
        if (Auth::user()->isEmployee()) {
            $contact_id = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first()->user_id;
        }
        $disc = $request->disc_id;
        $msgs = Discussion::with(['msg'])->where('disc_id', $disc)
            ->where('user_id', $contact_id)
            ->orWhereHas('ad', function (Builder $query) use ($contact_id) {
                $query->where('user_id', $contact_id);
            })
            ->find($disc);
        return view('msg.messages', compact(['msgs', 'contact_id']));
    }

    public function send(Request $request)
    {
        Validator::make($request->all(), array(
            'disc_id' => 'required|exists:discussion,disc_id',
            'message' => 'required|string',
        ))->validate();

        $contact_id = Auth::id();
        if (Auth::user()->isEmployee()) {
            $contact_id = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first()->user_id;
        }

        $disc_id = $request->disc_id;

        $disc = Discussion::where('disc_id', $disc_id)
            ->where('user_id', $contact_id)
            ->orWhereHas('ad', function (Builder $query) use ($contact_id) {
                $query->where('user_id', $contact_id);
            })
            ->find($disc_id);

        $msg = $disc->msg()->create([
            'msg_contenu' => $request->message,
            'user_id' => $contact_id,
        ]);

        if ($msg) {
            return response()->json([
                "success" => true,
                "message" => "sent"
            ]);
        }

        return response()->json(["success" => false, "message" => "can't send message"], 404);
    }

}







