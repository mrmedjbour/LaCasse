<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DrRolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('hasAccess:2');
    }

    public function index()
    {
        if ($casse_id = Auth::user()->casse_id) {
            $users = User::where('casse_id', $casse_id)->where('role_id', 3)->orWhere('role_id', 4)->paginate(15);
        } else {
            abort(404);
        }

        return view('dr.role', compact('users'));
    }

    public function create()
    {
        return view('dr.roleAdd');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), array(
            'userRole' => 'required|in:3,4',
            'firstname' => ['required', 'string', 'max:30'],
            'lastname' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:35', 'unique:users'],
            'phone' => 'array',
            'phone.*' => 'nullable|phone:DZ',
            'commune' => ['required', 'exists:commune,commune_id'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ))->validate();

        if ($casse_id = Auth::user()->casse_id) {
            User::create([
                'user_prenom' => $request->firstname,
                'user_nom' => $request->lastname,
                'email' => $request->email,
                'user_tel' => $request->phone,
                'role_id' => $request->userRole,
                'casse_id' => $casse_id,
                'password' => Hash::make($request->password),
                'commune_id' => $request->commune,
            ]);
        }

        return redirect(route('role.index'))->with('success', 'The employee was added successfully');
    }

    public function show($id)
    {
        redirect(route('role.edit', $id));
    }

    public function edit($id)
    {
        if ($casse_id = Auth::user()->casse_id) {
            $user = User::findOrFail($id)->where('casse_id', $casse_id)->whereIn('role_id', [3, 4])->find($id);
        }

        return view('dr.roleEdit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        Validator::make($request->all(), array(
            'userRole' => 'required|in:3,4',
        ))->validate();

        if ($casse_id = Auth::user()->casse_id) {
            $user = User::findOrFail($id)->where('casse_id', $casse_id)->whereIn('role_id', [3, 4])->find($id);
            $user->role_id = $request->userRole;
            $user->save();
        }

        return redirect(route('role.index'))->with('success', 'The employee role was changed successfully');
    }

    public function destroy(Request $request, $id)
    {
        Validator::make($request->all(), array(
            'user_id' => 'required|exists:users,user_id',
        ))->validate();

        if ($casse_id = Auth::user()->casse_id) {
            $user = User::findOrFail($request->user_id)->where('casse_id', $casse_id)->whereIn('role_id', [3, 4])->find($request->user_id);
            $user->user_etat = 0;
            $user->casse_id = null;
            $user->role_id = 5;
            $user->email = "casse-emp-" . $user->email;
            $user->password = "2y10pD5k4eXf7PvptcTDZxGcuJYgOJzv7pHGgfWAtLEgCe5vfm7rBjJ2";
            $user->save();
        }

        return redirect(route('role.index'))->with('success', 'The employee role was deleted successfully');
    }
}
