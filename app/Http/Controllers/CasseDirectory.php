<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasseDirectory extends Controller
{
    public function directory(Request $request)
    {
        return view("directory");
    }
}
