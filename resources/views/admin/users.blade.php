@extends('layouts.app')
@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div class="mb-1">
                        <form class="form-inline d-flex justify-content-end pr-2 mb-2" method="get">
                            <input class="form-control form-control-sm w-auto mr-2" type="search" placeholder="Search" aria-label="Search" name="search"><i class="fa fa-search text-success" aria-hidden="true"></i>
                        </form>
                    </div>
                    <div class="table-responsive table-borderless" style="font-size: 14px;">
                        <table class="table table-striped table-bordered table-sm">
                            <thead style="background-color: #0078c3;color: white;">
                            <tr>
                                <th style="width: 8%;">#</th>
                                <th>Full name</th>
                                <th style="width: 10%;">Role</th>
                                <th style="width: 8%;">Status</th>
                                <th style="width: 8%;"><strong>Delete</strong>
                                </th>
                                <th style="width: 6%;">View</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                @if ($user->role_id == 1)
                                    @continue
                                @endif
                                <tr>
                                    <td>{{ $user->user_id }}</td>
                                    <td>{{ $user->user_prenom.' '.$user->user_nom }}
                                        @if($user->role_id == 2)
                                            <a class="text-decoration-none font-weight-light" target="_blank" href="{{ route('profile', $user->casse->casse_id) }}">({{ $user->casse->casse_nom }})</a>
                                        @endif
                                    </td>
                                    <td> {{ $user->role->role_nom }}</td>
                                    <td class="text-center p-0">
                                        <button class="btn btn-sm shadow-none" id="StatusUserblock" type="button" u_id="{{ $user->user_id }}">
                                            @if ($user->user_etat == 1)
                                                <i class="fa fa-check text-success"></i>
                                            @else
                                                <i class="fa fa-ban text-warning"></i>
                                            @endif
                                        </button>
                                    </td>
                                    <td class="text-center p-0">
                                        <button class="btn btn-sm shadow-none" id="DeleteUserRole" type="button" u_id="{{ $user->user_id }}">
                                            <i class="fa fa-remove shadow-none text-danger"></i>
                                        </button>
                                    </td>
                                    <td class="text-center p-0">
                                        <a class="btn btn-link btn-sm" role="button" href="{{ route('users.show', $user->user_id) }}">
                                            <i class="fa fa-eye fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center text-sm-right">
                        <nav class="d-inline-block m-2 pagin">
                            {{ $users->links() }}
                        </nav>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="DeleteUserModel">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header py-1" style="background-color: #0078c3;color: white;">
                                    <h4 class="modal-title font-weight-normal" style="font-size: medium;">Delete Confirmation</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center pb-0"><i class="fas fa-exclamation-circle fa-5x" style="color: red;"></i>
                                    <p class="pt-3">Are you sure you want to delete this record?</p>
                                </div>
                                <div class="modal-footer p-2 px-sm-3">
                                    <form class="d-flex justify-content-between m-0 w-100" method="post">
                                        <input class="form-control" type="hidden" id="u_id" name="user_id">
                                        <button class="btn btn-secondary shadow-none" type="button" data-dismiss="modal">No</button>
                                        <button class="btn btn-danger shadow-none" type="submit">Yes, Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection