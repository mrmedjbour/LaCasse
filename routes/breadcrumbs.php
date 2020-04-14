<?php

use App\Casse;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

Breadcrumbs::before(function ($trail) {
    $trail->push('Home', route('index'));
});

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Dashboard', route('home'));
});

Breadcrumbs::for('annonce.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Ads', route('annonce.index'));
});

Breadcrumbs::for('annonce.create', function ($trail) {
    $trail->parent('home');
    $trail->push('Add Ad', route('annonce.create'));
});

Breadcrumbs::for('annonce.edit', function ($trail, $id) {
    $trail->parent('annonce.index');
    $trail->push('Edit Ad', route('annonce.edit', $id));
});

Breadcrumbs::for('messages', function ($trail) {
    $trail->parent('home');
    $trail->push('Mailbox');
});

Breadcrumbs::for('role.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Manage Roles');
});

Breadcrumbs::for('role.create', function ($trail) {
    $trail->parent('home');
    $trail->push('Add Role');
});

Breadcrumbs::for('role.edit', function ($trail) {
    $trail->parent('home');
    $trail->push('Edit User Role');
});

Breadcrumbs::for('user.account', function ($trail) {
    $trail->parent('home');
    $trail->push('Account information');
});

Breadcrumbs::for('directory', function ($trail) {
    $trail->push('Casse Directory', route('directory'));
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
        $trail->push('Professional Account Requests', route('pro.index'));
    } else {
        $trail->push('Switch to professional account', route('pro.index'));
    }
});

Breadcrumbs::for('users.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Manage Users', route('users.index'));
});

Breadcrumbs::for('users.show', function ($trail, $id) {
    $trail->parent('users.index');
    $trail->push('User information', route('users.show', $id));
});

Breadcrumbs::for('model.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Manage vehicle models', route('model.index'));
});

Breadcrumbs::for('model.create', function ($trail) {
    $trail->parent('home');
    $trail->push('Add a vehicle model');
});

Breadcrumbs::for('model.edit', function ($trail) {
    $trail->parent('home');
    $trail->push('Edit vehicle model');
});

Breadcrumbs::for('search.result', function ($trail) {
    $trail->push('Search Result');
});

Breadcrumbs::for('requests', function ($trail) {
    $trail->push('Parts Requests');
});

Breadcrumbs::for('ad.sell', function ($trail) {
    $trail->push('Ad');
});

Breadcrumbs::for('ad.buy', function ($trail) {
    $trail->push('Ad');
});

Breadcrumbs::for('page', function ($trail) {
    $trail->push('Page');
});

Breadcrumbs::for('contact.index', function ($trail) {
    $trail->push('Contact us');
});