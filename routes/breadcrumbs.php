<?php

use App\Casse;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

Breadcrumbs::before(function ($trail) {
    $trail->push('Home', route('index'));
});

Breadcrumbs::for('home', function ($trail) {
    $trail->push(__('Dashboard'), route('home'));
});

Breadcrumbs::for('annonce.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Ads'), route('annonce.index'));
});

Breadcrumbs::for('annonce.create', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Add Ad'), route('annonce.create'));
});

Breadcrumbs::for('annonce.edit', function ($trail, $id) {
    $trail->parent('annonce.index');
    $trail->push(__('Edit Ad'), route('annonce.edit', $id));
});

Breadcrumbs::for('annonce.show', function ($trail, $id) {
    $trail->parent('annonce.index');
    $trail->push(__('Ad') . ' : ' . $id);
});

Breadcrumbs::for('messages', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Mailbox'));
});

Breadcrumbs::for('role.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Manage Roles'));
});

Breadcrumbs::for('role.create', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Add Role'));
});

Breadcrumbs::for('role.edit', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Edit User Role'));
});

Breadcrumbs::for('user.account', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Account information'));
});

Breadcrumbs::for('directory', function ($trail) {
    $trail->push(__('Casse Directory'), route('directory'));
});

Breadcrumbs::for('profile', function ($trail, $id) {
    $casse_nom = Casse::whereHas('demande', function (Builder $query) {
        $query->where('dem_etat', '=', 1);
    })->findOrFail($id)->casse_nom;
    $trail->parent('directory');
    $trail->push(Str::title($casse_nom));
});

Breadcrumbs::for('pro.index', function ($trail) {
    $trail->parent('home');
    if (Auth::user()->role_id == 1) {
        $trail->push(__('Professional Account Requests'), route('pro.index'));
    } else {
        $trail->push(__('Switch to professional account'), route('pro.index'));
    }
});

Breadcrumbs::for('pro.show', function ($trail) {
    $trail->parent('home');
    if (Auth::user()->role_id == 1) {
        $trail->push(__('Professional Account Requests'), route('pro.index'));
    } else {
        $trail->push(__('Switch to professional account'), route('pro.index'));
    }
    $trail->push(__('Demand Information'));
});

Breadcrumbs::for('users.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Manage users'), route('users.index'));
});

Breadcrumbs::for('users.show', function ($trail, $id) {
    $trail->parent('users.index');
    $trail->push(__('User information'), route('users.show', $id));
});

Breadcrumbs::for('model.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Manage vehicle models'), route('model.index'));
});

Breadcrumbs::for('model.create', function ($trail) {
    $trail->parent('model.index');
    $trail->push(__('Add vehicle model'));
});

Breadcrumbs::for('model.edit', function ($trail) {
    $trail->parent('model.index');
    $trail->push(__('Edit vehicle model'));
});

Breadcrumbs::for('search.result', function ($trail) {
    $trail->push('Search Result');
});

Breadcrumbs::for('requests', function ($trail) {
    $trail->push(__('Parts Requests'));
});

Breadcrumbs::for('ad.sell', function ($trail) {
    $trail->push('Ad');
});

Breadcrumbs::for('ad.buy', function ($trail) {
    $trail->push(__('Ad'));
});

Breadcrumbs::for('page', function ($trail) {
    $trail->push(__('Page'));
});

Breadcrumbs::for('contact.index', function ($trail) {
    $trail->push(__('Contact us'));
});

Breadcrumbs::for('login', function ($trail) {
    $trail->push(__('Login'));
});

Breadcrumbs::for('password.confirm', function ($trail) {
    $trail->push(__('Password Confirmation'));
});

Breadcrumbs::for('password.request', function ($trail) {
    $trail->push(__('Forgot password'));
});

Breadcrumbs::for('password.reset', function ($trail) {
    $trail->push(__('Change Password'));
});

Breadcrumbs::for('register', function ($trail) {
    $trail->push(__('Register'));
});