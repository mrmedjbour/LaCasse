@extends('layouts.app')

@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4" style="padding: 0px;font-family: Montserrat, sans-serif;font-size: 14px;">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div class="mb-1">
                        <form class="form-inline d-flex justify-content-end pr-2 mb-2" method="get">
                            <input class="form-control form-control-sm w-auto mr-2" type="search" placeholder="Search"
                                   aria-label="Search" name="search"><i class="fa fa-search text-success"
                                                                        aria-hidden="true"></i>
                        </form>
                    </div>
                    <div class="table-responsive table-borderless" style="font-size: 14px;">
                        <table class="table table-striped table-bordered table-sm">
                            <thead style="background-color: #0078c3;color: white;">
                            <tr>
                                <th style="width: 8%;">#</th>
                                <th>Full name</th>
                                <th>Role</th>
                                <th style="width: 8%;">Status</th>
                                <th style="width: 8%;"><strong>Delete</strong>
                                </th>
                                <th style="width: 6%;">View</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1234</td>
                                <td>Medjbour Hamid</td>
                                <td>Seller</td>
                                <td class="text-center p-0">
                                    <button class="btn btn-sm shadow-none" id="StatusUserblock" type="button"
                                            u_id="1234"><i class="fa fa-check text-success"></i>
                                    </button>
                                </td>
                                <td class="text-center p-0">
                                    <button class="btn btn-sm shadow-none" id="DeleteUserRole" type="button"
                                            u_id="1234"><i class="fa fa-remove shadow-none text-danger"></i>
                                    </button>
                                </td>
                                <td class="text-center p-0"><a class="btn btn-link btn-sm" role="button" href="#"><i
                                                class="fa fa-eye fa-lg"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1233</td>
                                <td>Ouhabi Fares&nbsp;<a class="text-decoration-none font-weight-light" href="#">(CasseAutoCrosso)</a>
                                </td>
                                <td>Dr Casse</td>
                                <td class="text-center p-0">
                                    <button class="btn btn-sm shadow-none" id="StatusUserblock" type="button"
                                            u_id="1233"><i class="fa fa-ban text-warning"></i>
                                    </button>
                                </td>
                                <td class="text-center p-0">
                                    <button class="btn btn-sm shadow-none" id="DeleteUserRole" type="button"
                                            u_id="1233"><i class="fa fa-remove shadow-none text-danger"></i>
                                    </button>
                                </td>
                                <td class="text-center p-0"><a class="btn btn-link btn-sm" role="button" href="#"><i
                                                class="fa fa-eye fa-lg"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center text-sm-right">
                        <nav class="d-inline-block m-2">
                            <ul class="pagination mb-0">
                                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                                aria-hidden="true">«</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                aria-hidden="true">»</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="DeleteUserModel">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header py-1" style="background-color: #0078c3;color: white;">
                                    <h4 class="modal-title font-weight-normal" style="font-size: medium;">Delete
                                        Confirmation</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center pb-0"><i class="fas fa-exclamation-circle fa-5x"
                                                                            style="color: red;"></i>
                                    <p class="pt-3">Are you sure you want to delete this record?</p>
                                </div>
                                <div class="modal-footer p-2 px-sm-3">
                                    <form class="d-flex justify-content-between m-0 w-100" method="post">
                                        <input class="form-control" type="hidden" id="u_id" name="user_id">
                                        <button class="btn btn-secondary shadow-none" type="button"
                                                data-dismiss="modal">No
                                        </button>
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