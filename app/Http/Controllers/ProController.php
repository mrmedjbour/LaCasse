<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        if (($user->demandes->where('dem_etat', null)->count() or $user->demandes->where('dem_etat', 1)->count()) and $user->role_id == 5) {
            return view('proSent', compact('user'));
        } elseif ($user->role_id == 1) {
            $dems = \App\Demande::all()->sortByDesc('dem_date');
            return view('admin.proList', compact('dems'));
        } elseif ($user->role_id == 5) {
            return view('pro', compact('user'));
        } else {
            return redirect(route("home"));
        }
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), array(
            'casse_name' => 'required|between:1,30',
            'casse_adr' => 'required|between:1,50',
            'casse_rc' => 'required|between:4,10',
            'casse_doc' => 'required|file',
            'commune' => 'exists:commune,commune_id',
            'phone' => 'array',
            'phone.*' => 'nullable|phone:DZ',
        ))->validate();
        $user = Auth::user();
        if ($user->demandes->where('dem_etat', null)->count() or $user->demandes->where('dem_etat', 1)->count() or $user->role_id != 5) {
            return redirect(route("pro.index"));
        }
        if (!$request->commune) {
            $request->commune = $user->commune_id;
        }
        if ($request->phone) {
            $user->user_tel = array_filter($request->phone);
        }
        $casse = $user->casse()->create([
            'casse_nom' => $request->casse_name,
            'casse_adr' => $request->casse_adr,
            'casse_rc' => $request->casse_rc,
            'commune_id' => $request->commune,
        ]);
        $user->casse()->associate($casse);

        if ($doc = $request->file('casse_doc')) {
            if (in_array(strtolower($doc->extension()), ['pdf', 'jpeg', 'png', 'jpg', 'docx', 'doc', 'xls', 'xlsx', 'odt', 'PDF', 'ppt', 'txt', 'zip', 'rar', 'rtf'])) {
                $doc_name = Auth::id() . Str::random(4) . '.' . $doc->extension();
                $doc->move(public_path('/files/doc/'), $doc_name);
                if ($doc_name) {
                    $user->demande()->create([
                        'casse_id' => $casse->casse_id,
                        'dem_doc' => $doc_name,
                    ]);
                }
            }
        }
        $user->save();
        return redirect(route("pro.index"))->with('success', 'Your request has been sent successfully');
    }

    public function show($id)
    {
        $dem = \App\Demande::findOrFail($id);
        return view("admin.proReq", compact('dem'));
    }

    public function update(Request $request, $id)
    {
        Validator::make($request->all(), array(
            'casse_loc' => ['required', 'between:1,30', 'regex:/^[-]?((([0-8]?[0-9])(\.(\d+))?)|(90(\.0+)?)),[-]?((((1[0-7][0-9])|([0-9]?[0-9]))(\.(\d+))?)|180(\.0+)?)$/'],
        ))->validate();
        $dem = \App\Demande::findOrFail($id);
        if ($dem->dem_etat == 1) {
            return redirect(route("pro.index"))->with('success', 'A request from this user has already been approved');
        }
        $dem->user->role_id = 2;
        if ($dem->casse_id !== $dem->user->casse_id) {
            $dem->user->casse_id = $dem->casse_id;
        }
        $dem->user->save();
        if ($request->casse_loc) {
            $dem->casse->casse_loc = $request->casse_loc;
            $dem->casse->save();
        }
        $dem->dem_etat = 1;
        $dem->save();
        return redirect(route("pro.index"))->with('success', 'The request has been successfully approved');
    }

    public function destroy($id)
    {
        $dem = \App\Demande::findOrFail($id);
        if ($dem->dem_etat == 2) {
            return redirect(route("pro.index"));
        }
        $dem->dem_etat = 2;
        $dem->save();
        return redirect(route("pro.index"))->with('success', 'The request has been successfully rejected');
    }

    public function create()
    {
    }

    public function edit($id)
    {
    }
}
