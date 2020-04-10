<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Casse;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homeInfo = null;
        if (Auth::user()->role_id == 1) {
            $homeInfo['totalAds'] = Annonce::all()->count();
            $homeInfo['totalUsers'] = User::where('user_etat', 1)->count();
            $homeInfo['totalCasses'] = Casse::whereHas('demande', function (Builder $query) {
                $query->where('dem_etat', '=', 1);
            })->count();
        }
        return view('home', compact('homeInfo'));
    }
}
