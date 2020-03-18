@extends('layouts.app')

@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4" style="padding: 0px;font-family: Montserrat, sans-serif;font-size: 14px;">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div style="background-color: #f8f8f8;border: 1px solid #d5d5d5;border-radius: 3px;margin-bottom: 10vh;">
                        <form method="post" enctype="multipart/form-data">
                            <div class="w-100" style="padding: 5px 3%;">
                                <h6 style="margin-bottom: 1rem;">Edit User Role</h6>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="first-name">User Role :</label>
                                    <select class="form-control form-control-sm"
                                            style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;" required="">
                                        <option value="Seller">Seller</option>
                                        <option value="Buyer">Buyer</option>
                                    </select>
                                </div>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="first-name">First name :</label>
                                    <input class="form-control form-control-sm" type="text" id="first-name"
                                           value="Hamid" style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;"
                                           disabled="" readonly="">
                                </div>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="first-name">Last name :</label>
                                    <input class="form-control form-control-sm" type="text" id="first-name"
                                           value="Medjbour"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;" disabled=""
                                           readonly="">
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="email">Email :&nbsp;</label>
                                    <input class="form-control form-control-sm" type="text" id="first-name"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;"
                                           value="email@example.com" disabled="" readonly="">
                                </div>
                                <h6>Address :&nbsp;</h6>
                                <p class="text-black-50 pl-1">Chabet Ameur, Isser, Boumerdes</p>
                                <h6 style="margin-bottom: 1rem;">Phone numbers (optional):</h6>
                                <div class="form-group">
                                    <input class="form-control form-control-sm d-block mx-auto mb-2" type="tel"
                                           style="border: 1px solid #9a9a9a;max-width: 300px;" value="0543000000"
                                           disabled="" readonly="">
                                    <input class="form-control form-control-sm d-block mx-auto mb-2" type="tel"
                                           style="border: 1px solid #9a9a9a;max-width: 300px;" value="0765000000"
                                           disabled="" readonly="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mx-4 mb-3"><a
                                        class="btn btn-danger btn-sm shadow-none" role="button" href="#"><i
                                            class="fa fa-remove m-1"></i>Cancel</a>
                                <button class="btn btn-success btn-sm shadow-none" type="submit"><i
                                            class="fa fa-edit m-1"></i>Edit Role
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection