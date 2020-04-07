<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $users = User::with('casse')
            ->when($search, function ($query, $search) {
                return $query->where('user_prenom', 'LIKE', "%$search%")
                    ->orWhere('user_nom', 'LIKE', "%$search%")
                    ->orWhere('user_id', $search)
                    ->orWhereHas('casse', function ($q) use ($search) {
                        $q->where('casse_nom', 'LIKE', "%$search%");
                    });
            })
            ->latest()
            ->paginate(20);
        return view('admin.users', compact(['users']));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("admin.userView", compact(['user']));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // block / unblock user
        $user = User::findOrFail($id);
        if ($user->role_id == 1) {
            return false;
        }
        $user->user_etat = !$user->user_etat;
        $user->save();
        if ($user->role_id == 2) {
            if ($casse_id = $user->casse_id) {
                $casse_users = User::where('casse_id', $casse_id)->where('user_id', '<>', $user->user_id)->update(['user_etat' => $user->user_etat]);
            }
        }
        return response()->json([
            "success" => true,
            "status" => $user->user_etat
        ]);
    }

    public function destroy($id)
    {
        //
    }
}
