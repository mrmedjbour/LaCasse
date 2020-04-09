<?php

namespace App\Http\Controllers;

use App\Discussion;
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
        return view('messages');
    }

    public function discussion()
    {

//        $adDesc = Auth::user()->adDesc()->select(['disc_id','disc_titre','disc_stamp','user_id','annonce_id'])->get();
//        $desc = Auth::user()->desc()->select('disc_id')->get('disc_id');
//        $adDesc = Auth::user()->adDesc()->latest();        latest('msg_stamp');
        $user_id = Auth::id();

//        $desc = Discussion::with('msg')->where('user_id', $user_id)->orWhereHas('ad', function (Builder $query) use ($user_id) {
//            $query->where('user_id', $user_id);
//        })->latest('disc_stamp')->get();

//        $desc = Discussion::with(['msg' => function($query) { $query->orderBy('msg_stamp', 'desc'); }])
//            ->where('user_id', $user_id)
//            ->orWhereHas('ad', function (Builder $query) use ($user_id) { $query->where('user_id', $user_id); })
//            ->latest('disc_stamp')
//            ->get();
//        $desc = Discussion::with(['msg' => function($query) { $query->orderBy('msg_stamp', 'desc'); }])
//            ->where('user_id', $user_id)
//            ->orWhereHas('ad', function (Builder $query) use ($user_id) { $query->where('user_id', $user_id); })
//            ->latest('disc_stamp')
//            ->get();
        $desc = Discussion::with('latestmsg')
            ->where('user_id', $user_id)
            ->orWhereHas('ad', function (Builder $query) use ($user_id) {
                $query->where('user_id', $user_id);
            })
            ->orderByDesc('disc_stamp')->get();

        return response()->json($desc);
    }

}







