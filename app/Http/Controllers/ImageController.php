<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function delete($id)
    {
        $image = Auth::user()->images()->findOrFail($id)->delete();
        return response()->json($image);
    }
}
