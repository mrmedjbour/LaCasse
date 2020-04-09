<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function messages()
    {
        $user_id = Auth::id();

        $descs = Discussion::with('latestmsg')
            ->where('user_id', $user_id)
            ->orWhereHas('ad', function (Builder $query) use ($user_id) {
                $query->where('user_id', $user_id);
            })
            ->orderByDesc('disc_stamp')
            ->get();
        $contact_id = Auth::id();
        if (Auth::user()->isEmployee()) {
            $contact_id = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first()->user_id;
        }

        return view('messages', compact(['descs', 'contact_id']));
    }

    public function discussion()
    {
        $user_id = Auth::id();

        $descs = Discussion::with('latestmsg')
            ->where('user_id', $user_id)
            ->orWhereHas('ad', function (Builder $query) use ($user_id) {
                $query->where('user_id', $user_id);
            })
            ->orderByDesc('disc_stamp')
            ->get();

        $contact_id = Auth::id();
        if (Auth::user()->isEmployee()) {
            $contact_id = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first()->user_id;
        }

        return view('msg.contacts', compact(['descs', 'contact_id']));
    }

}







