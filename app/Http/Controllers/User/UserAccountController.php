<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
            'phone.*' => 'nullable|numeric|regex:/^([0-9]{9,13})$/',
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
        return "updateAvatar";
    }

    public function updatePassword(Request $request)
    {
        return "updatePassword";
    }
}
