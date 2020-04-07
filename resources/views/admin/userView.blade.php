@extends('layouts.app')
@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div style="background-color: #f8f8f8;border: 1px solid #d5d5d5;border-radius: 3px;margin-bottom: 10vh;">
                        <form method="post" enctype="multipart/form-data">
                            <div class="d-md-flex justify-content-around w-100" style="padding: 5px 3%;">
                                <div class="w-100">
                                    <h6 class="mb-1">User information :</h6>
                                    <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                        <label class="text-nowrap" for="roleUser">Role :</label>
                                        <input class="form-control form-control-sm ProfInputS" type="text" id="roleUser" value="{{ $user->role->role_nom }}" disabled>
                                    </div>
                                    <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                        <label class="text-nowrap" for="first-name">Firstname :</label>
                                        <input class="form-control form-control-sm ProfInputS" type="text" id="first-name" value="{{ $user->user_prenom }}" disabled>
                                    </div>
                                    <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                        <label class="text-nowrap" for="Lastname">Lastname :</label>
                                        <input class="form-control form-control-sm ProfInputS" type="text" id="Lastname" value="{{ $user->user_nom }}" disabled>
                                    </div>
                                    <div class="form-group d-sm-flex justify-content-sm-between">
                                        <label class="text-nowrap" for="email">Email :</label>
                                        <input class="form-control form-control-sm ProfInputS" type="text" id="email" value="{{ $user->email  }}" disabled>
                                    </div>
                                    <h6 class="mb-1 mb-1">Address :</h6>
                                    <p class="font-weight-light pl-2 text-dark">{{ Str::title($user->commune->commune_nom .', '.$user->commune->daira->daira_nom.', '.$user->commune->daira->wilaya->wilaya_nom) }}</p>
                                    @foreach($user->user_tel as $phone)
                                        @if ($loop->first)
                                            <h6 class="mb-1">Phone numbers :</h6>
                                        @endif
                                        <input class="form-control form-control-sm d-block mb-1 ml-2 UserViewInput" value="{{ $phone }}" disabled>
                                    @endforeach

                                </div>
                                <div class="text-center w-auto p-1" id="Profile">
                                    <img class="rounded-circle img-fluid" id="AvatarProfile" src="{{ asset('/files/avatar/' . $user->user_avatar) }}" alt="Avatar" loading="auto" style="width: 200px;height: 200px;margin: 5px;">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start justify-content-xl-start mx-4 mb-3 mt-1">
                                <a class="btn btn-dark shadow-none" role="button" href="{{ route('users.index') }}"><i class="fa fa-chevron-left m-1"></i>&nbsp;Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection