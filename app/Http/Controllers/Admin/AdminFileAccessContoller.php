<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFileAccessContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AccessUserDoc($id)
    {
        if (Auth::user()->role_id !== 1) {
            return redirect(route("home"));
        }
        $dem = \App\Demande::findOrFail($id);
        $pathToDoc = public_path('/files/doc/') . $dem->dem_doc;
        return response()->file($pathToDoc);
    }
}
