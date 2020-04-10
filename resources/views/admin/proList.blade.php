@extends('layouts.app') @section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU">@include('comp.sidebar')</div>
                <div class="col-lg-8 dash-info">
                    @if(session('success'))
                        <div class="alert alert-success m-2">{{ session('success') }}</div>
                    @endif
                    <div class="table-responsive table-borderless" style="font-size: 14px;">
                        <table class="table table-striped table-bordered table-sm">
                            <thead style="background-color: #0078c3;color: white;">
                            <tr>
                                <th style="width: 8%;">#</th>
                                <th>Full name</th>
                                <th style="width: 18%;">Date</th>
                                <th style="width: 15%;">Status</th>
                                <th class="text-center" style="width: 10%;"><strong>Consult</strong>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dems as $dem)
                                <tr>
                                    <td>{{ $dem->dem_id }}</td>
                                    <td>{{ $dem->user->user_prenom .' '. $dem->user->user_nom}}</td>
                                    <td>{{ \Carbon\Carbon::parse($dem->dem_date)->format('d/m/y H:i')}}</td>
                                    @if($dem->dem_etat == 1)
                                        <td class="text-success">confirmed</td>
                                    @elseif($dem->dem_etat == 2)
                                        <td class="text-danger">rejected</td>
                                    @else
                                        <td class="text-warning">waiting</td>
                                    @endif
                                    <td class="text-center p-0">
                                        <a class="btn btn-link btn-sm" role="button" href="{{ route("pro.show", $dem->dem_id) }}"><i class="fa fa-eye fa-lg"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                        <div class="text-center text-sm-right">
                            <nav class="d-inline-block m-2 pagin">
                                {{ $dems->links() }}
                            </nav>
                        </div>
                        <div class="modal fade" role="dialog" tabindex="-1" id="DeleteAdModel">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header py-1" style="background-color: #0078c3;color: white;">
                                        <h4 class="modal-title font-weight-normal" style="font-size: medium;">Delete
                                            Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                </div>
                                <div class="modal-body text-center pb-0"><i class="fas fa-exclamation-circle fa-5x" style="color: red;"></i>
                                    <p class="pt-3">Are you sure you want to delete this record?</p>
                                </div>
                                <div class="modal-footer p-2 px-sm-3">
                                    <form class="d-flex justify-content-between m-0 w-100" method="post">
                                        <input class="form-control" type="hidden" id="a_id" name="annonce_id">
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