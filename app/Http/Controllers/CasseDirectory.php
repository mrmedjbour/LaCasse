<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class CasseDirectory extends Controller
{
    public function directory(Request $request)
    {
        $map = [
            'lat' => 32.6872076,
            'lng' => 4.9130252,
            'zoom' => 5,
            'markers' => [],
        ];

        $casses = \App\Casse::whereHas('demande', function (Builder $query) {
            $query->where('dem_etat', '=', 1);
        })->get();

        $map['markers'] = $casses->map(function ($c) {
            if ($c->casse_loc == "0,0" or $c->casse_loc == null) {
                return false;
            }
            $loc = explode(",", $c->casse_loc);
            return [
                'title' => $c->casse_nom,
                'lat' => $loc[0],
                'lng' => $loc[1],
                'popup' => "<h6>$c->casse_nom</h6><p class='text-center'><a href=\"#\" target=\"_blank\"><i class=\"fa fa-external-link fa-lg mr-1\"></i></a></p>",
                'icon' => '/img/pin.png',
                'icon_size' => [30, 30],
                'icon_anchor' => [0, 30],
            ];
        });

        return view("directory", compact(['map', 'casses']));
    }

    public function profile($id, $title = null)
    {
        $casse = \App\Casse::whereHas('demande', function (Builder $query) {
            $query->where('dem_etat', '=', 1);
        })->findOrFail($id);

        if (empty($title)) {
            return redirect(route('profile', [$id, Str::slug($casse->casse_nom, '-')]));
        }

        $av_mod = \App\Annonce::select('modele_id')->where('user_id', $casse->user->user_id)->where('annonce_type', 'sell')->distinct()->pluck('modele_id');

        $av_marques = \App\Marque::whereHas('modeles', function (Builder $query) use ($av_mod) {
            $query->whereIn('modele_id', $av_mod);
        })->with(['modeles' => function ($query) use ($av_mod) {
            $query->whereIn('modele_id', $av_mod);
        }])->get();

        return view('profile', compact(['casse', 'av_marques']));
    }
}