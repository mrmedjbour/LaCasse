<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('pro', compact('user'));
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), array(
            'casse_name' => 'required',
            'casse_adr' => 'required',
            'casse_rc' => 'required',
            'casse_doc' => 'required|file',
            'commune' => 'exists:commune,commune_id',
            'phone' => 'array',
            'phone.*' => 'nullable|numeric|regex:/^([0-9]{9,13})$/',
        ))->validate();

        $user = Auth::user();
        if ($request->phone) {
            $user->user_tel = array_filter($request->phone);
        }
        $user->save();


        return "reg dom";
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        //
    }
}
