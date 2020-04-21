<?php

namespace App\Providers;

use App\Annonce;
use App\Discussion;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (true) {
            URL::forceScheme('https');
        }

        View::composer('*', function ($view) {
            if (Auth::check()) {
                // notification of unread message
                $contactId = Auth::id();
                if (Auth::user()->isEmployee()) {
                    $contactId = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first()->user_id;
                }
                $count_1 = Discussion::whereHas('latestmsg', function ($q) use ($contactId) {
                    $q->whereNull('msg_etat')->where('user_id', '<>', $contactId);
                })->whereHas('adWithDeleted', function (Builder $query) use ($contactId) {
                    $query->where('user_id', $contactId);
                });
                $getEdDiscId = $count_1->pluck('disc_id');
                $count_v_1 = $count_1->count();
                $count_v_2 = Discussion::whereHas('latestmsg', function ($q) use ($contactId) {
                    $q->whereNull('msg_etat')->where('user_id', '<>', $contactId);
                })->where('user_id', $contactId)->whereNotIn('disc_id', $getEdDiscId)->count();
                $unreadMsgCount = $count_v_2 + $count_v_1;
                if ($unreadMsgCount > 99) {
                    $unreadMsgCount = 99;
                }
                // Total Ads Count
                $totalAdsCount = Annonce::where('user_id', $contactId)->count();
                if (Auth::user()->role_id == 1) {
                    $totalAdsCount = Annonce::all()->count();
                }

                $view->with(['unreadMsgCount' => $unreadMsgCount, 'totalAdsCount' => $totalAdsCount]);
            }
        });
    }
}
