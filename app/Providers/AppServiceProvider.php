<?php

namespace App\Providers;

use App\Discussion;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
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
        View::composer('*', function ($view) {
            if (Auth::check()) {
                // notification of unread message
                $contactId = Auth::id();
                if (Auth::user()->isEmployee()) {
                    $contactId = User::where('casse_id', Auth::user()->casse_id)->where('role_id', 2)->first()->user_id;
                }
                $count_v_1 = Discussion::whereHas('latestmsg', function ($q) {
                    $q->whereNull('msg_etat');
                })->whereHas('ad', function (Builder $query) use ($contactId) {
                    $query->where('user_id', $contactId);
                })->count();
                $count_v_2 = Discussion::whereHas('latestmsg', function ($q) {
                    $q->whereNull('msg_etat');
                })->where('user_id', $contactId)->count();
                $unreadMsgCount = $count_v_2 + $count_v_1;
                if ($unreadMsgCount > 99) {
                    $unreadMsgCount = 99;
                }
                $view->with('unreadMsgCount', $unreadMsgCount);
            }
        });
    }
}
