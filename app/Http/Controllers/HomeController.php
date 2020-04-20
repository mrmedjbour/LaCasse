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
            $allAdCounts = cache()->remember('AdminallAdCounts', 60, function () {
                return Annonce::all()->count();
            });
            $TotalUsersCounts = cache()->remember('AdminTotalUsersCounts', 70, function () {
                return User::where('user_etat', 1)->where('role_id', '<>', 1)->count();
            });
            $TotalCassesCounts = cache()->remember('AdminTotalCassesCounts', 80, function () {
                return Casse::whereHas('demande', function (Builder $query) {
                    $query->where('dem_etat', '=', 1);
                })->count();
            });

            $homeInfo['totalAds'] = $allAdCounts;
            $homeInfo['totalUsers'] = $TotalUsersCounts;
            $homeInfo['totalCasses'] = $TotalCassesCounts;
        }
        return view('home', compact('homeInfo'));
    }
}
