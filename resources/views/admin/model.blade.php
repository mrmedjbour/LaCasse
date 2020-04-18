@extends('layouts.app')
@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU">@include('comp.sidebar')</div>
                <div class="col-lg-8 dash-info">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="text-center text-sm-right">
                        <a class="btn btn-success btn-sm shadow-none m-2" role="button" href="{{ route('model.create') }}">
                            <i class="fa fa-plus mr-1"></i>{{__('Add vehicle model')}}
                        </a>
                    </div>
                    <div class="table-responsive" style="font-size: 14px;">
                        <table class="table table-striped table-sm">
                            <thead style="background-color: #0078c3;color: white;">
                            <tr>
                                <th style="width: 8%;">#</th>
                                <th>{{__('Make')}}</th>
                                <th>{{__('Model')}}</th>
                                <th style="width: 10%;">{{__('Delete')}}</th>
                                <th class="text-center" style="width: 10%;">{{__('Edit')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($models as $model)
                                <tr>
                                    <td>{{ $model->modele_id }}</td>
                                    <td>{{ $model->marque->marque_nom }}</td>
                                    <td>{{ $model->modele_nom }}</td>
                                    <td class="text-center p-0">
                                        <button class="btn btn-sm shadow-none" id="DeleteMakeModelBtn" type="button" m_id="{{ $model->modele_id }}">
                                            <i class="fa fa-remove shadow-none text-danger"></i>
                                        </button>
                                    </td>
                                    <td class="text-center p-0">
                                        <a class="btn btn-link btn-sm" role="button" href="{{ route('model.edit', $model->modele_id) }}">
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
                            {{ $models->onEachSide(1)->links() }}
                        </nav>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="DeleteMakeModel">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header py-1" style="background-color: #0078c3;color: white;">
                                    <h4 class="modal-title font-weight-normal" style="font-size: medium;">{{__('Delete Confirmation')}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center pb-0"><i class="fas fa-exclamation-circle fa-5x" style="color: red;"></i>
                                    <p class="pt-3">{{__('Are you sure you want to delete this model ?')}}</p>
                                </div>
                                <div class="modal-footer p-2 px-sm-3">
                                    <form class="d-flex justify-content-between m-0 w-100" method="post" action="{{ route('model.destroy', "delete") }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" id="m_id" name="modele_id">
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