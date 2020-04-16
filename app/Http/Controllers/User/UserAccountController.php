<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('hasAccess:2')->only('updateCasseCover');
    }

    public function account()
    {
        $user = Auth::user();
        return view("account", compact("user"));
    }

    public function updateAccount(Request $request)
    {
        $request->phone = preg_replace('/^\+?213|\|1|\D/', '', ($request->phone));
        Validator::make($request->all(), array(
            'commune' => 'exists:commune,commune_id',
            'phone' => 'array',
            'phone.*' => 'nullable|phone:DZ',
        ))->validate();

        $user = Auth::user();

        if ($request->commune) {
            $user->commune_id = $request->commune;
        }
        if ($request->phone) {
            $user->user_tel = array_filter($request->phone);
        }
        $user->save();

        return redirect(route('user.account'))->with('success', 'Your Account information has been successfully updated');
    }

    public function updateAvatar(Request $request)
    {
        Validator::make($request->all(), array(
            'avatar' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ))->validate();
        if ($avatar = $request->file('avatar')) {
            if (in_array($avatar->extension(), ['jpeg', 'png', 'jpg', 'bmp', 'gif', 'svg'])) {
                $avatar_name = Auth::id() . '.' . $avatar->extension();
                $avatar->move(public_path('/files/avatar/'), $avatar_name);
                $user = Auth::user();
                $user->user_avatar = $avatar_name;
                $user->save();
                return response()->json([
                    "success" => true,
                    "avatar" => asset('/files/avatar') . '/' . $avatar_name
                ]);
            }
        }
        return response()->json(["success" => false, "message" => "can't change avatar"], 304);
    }

    public function updatePassword(Request $request)
    {
        Validator::make($request->all(), array(
            'oldpassword' => 'password',
            'password' => 'required|between:6,30|confirmed',
        ))->validate();
        if ($request->password) {
            $user = Auth::user();
            $user->password = Hash::make($request->password);
            $user->save();
        }
        return redirect(route('user.account'))->with('success', 'Your Password has been changed successfully');
    }

    public function updateCasseCover(Request $request)
    {
        Validator::make($request->all(), array(
            'cover' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ))->validate();
        if ($cover = $request->file('cover')) {
            if (in_array($cover->extension(), ['jpeg', 'png', 'jpg', 'bmp', 'gif', 'svg'])) {
                $cover_name = "casse_" . Auth::id() . '.' . $cover->extension();
                $cover->move(public_path('/files/casse/'), $cover_name);
                $casse_id = Auth::user()->casse_id;
                $casse = \App\Casse::findOrFail($casse_id);
                $casse->casse_image = $cover_name;
                $casse->save();
                return redirect(route('user.account'))->with('success', 'Cover changed successfully');
            }
        }
        return redirect(route('user.account'));
    }
}
