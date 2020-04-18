@extends('layouts.app')
@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="text-center text-sm-right"><a class="btn btn-success btn-sm shadow-none m-2" role="button" href="{{ route('role.create') }}"><i class="fa fa-user-plus mr-1"></i>{{__('Add Role')}}</a>
                    </div>
                    <div class="table-responsive table-borderless" style="font-size: 14px;">
                        <table class="table table-striped table-bordered table-sm">
                            <thead class="text-white" style="background-color: #0078c3;">
                            <tr>
                                <th style="width: 8%;">#</th>
                                <th>{{__('Full name')}}</th>
                                <th class="text-center" style="width: 20%;">{{__('Role')}}</th>
                                <th class="text-center" style="width: 10%;"><strong>{{__('Delete')}}</strong>
                                </th>
                                <th class="text-center" style="width: 10%;">{{__('Edit')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->user_id }}</td>
                                    <td>{{ $user->user_prenom .' '.$user->user_nom }}</td>
                                    <td class="text-center">@if ($user->role_id == 3) {{__('Seller')}} @elseif($user->role_id == 4) {{__('Buyer')}} @endif</td>
                                    <td class="text-center p-0">
                                        <button class="btn btn-sm shadow-none" id="DeleteUserRole" type="button" u_id="{{ $user->user_id }}">
                                            <i class="fa fa-user-times shadow-none text-danger fa-lg"></i>
                                        </button>
                                    </td>
                                    <td class="text-center p-0">
                                        <a class="btn btn-link btn-sm" role="button" href="{{ route('role.edit', $user->user_id) }}">
                                            <i class="fa fa-edit fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center text-sm-right">
                        <nav class="d-inline-block m-2 pagin">
                            {{ $users->onEachSide(1)->links() }}
                        </nav>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="DeleteRoleUserModel">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header py-1" style="background-color: #0078c3;color: white;">
                                    <h4 class="modal-title font-weight-normal" style="font-size: medium;">{{__('Delete Confirmation')}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center pb-0"><i class="fas fa-exclamation-circle fa-5x" style="color:red;"></i>
                                    <p class="pt-3">{{__('Are you sure you want to delete this employee ?')}}</p>
                                </div>
                                <div class="modal-footer p-2 px-sm-3">
                                    <form class="d-flex justify-content-between m-0 w-100" method="post" action="{{ route('role.destroy', 'delete') }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" id="u_id" name="user_id">
                                        <button class="btn btn-secondary shadow-none" type="button" data-dismiss="modal">{{__('No')}}</button>
                                        <button class="btn btn-danger shadow-none" type="submit">{{__('Yes, Delete')}}</button>
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