<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function delete($id)
    {
        $userToDo = Auth::user();
        if (Auth::user()->isEmployee()) {
            $userToDo = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first();
        }
        $image = $userToDo->images()->findOrFail($id)->delete();
        return response()->json($image);
    }
}
