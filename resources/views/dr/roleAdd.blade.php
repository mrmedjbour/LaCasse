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
                                <h6 style="margin-bottom: 1rem;">Add User Role</h6>
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
                                           placeholder="First name"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;" required="">
                                </div>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="first-name">Last name :</label>
                                    <input class="form-control form-control-sm" type="text" id="first-name"
                                           placeholder="Last name"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;" required="">
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="email">Email :&nbsp;</label>
                                    <input class="form-control form-control-sm" type="text" id="first-name"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;"
                                           placeholder="E-mail" required="">
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="password">Password :&nbsp; &nbsp; &nbsp;</label>
                                    <input class="form-control" type="password" id="password"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;"
                                           placeholder="Password" required="">
                                </div>
                                <h6 style="margin-bottom: 1rem;">Address :&nbsp;</h6>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <label id="willya" for="email" style="margin: 0;"></label>
                                    <select class="form-control form-control-sm form-control" id="willya"
                                            style="color: #444;border: 1px solid #9a9a9a;width: auto !important;min-width: 223px;">
                                        <option value="14">Willya</option>
                                    </select>
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <label id="daira" for="email" style="margin: 0;"></label>
                                    <select class="form-control form-control-sm form-control" id="daira"
                                            style="color: #444;border: 1px solid #9a9a9a;width: auto !important;min-width: 223px;"
                                            disabled="">
                                        <option value="14">daira</option>
                                    </select>
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <label id="commune" for="email" style="margin: 0;"></label>
                                    <select class="form-control form-control-sm form-control" id="commune"
                                            style="color: #444;border: 1px solid #9a9a9a;width: auto !important;min-width: 223px;"
                                            disabled="" required="">
                                        <option value="14">commune</option>
                                    </select>
                                </div>
                                <h6 style="margin-bottom: 1rem;">Phone numbers (optional):</h6>
                                <div class="form-group">
                                    <input class="form-control form-control-sm d-block mx-auto mb-2" type="tel"
                                           placeholder="Phone Number"
                                           style="border: 1px solid #9a9a9a;max-width: 300px;" name="phone[]"
                                           inputmode="tel"><a class="btn shadow-none" role="button" id="addPhoneNumber"
                                                              href="#"
                                                              style="padding: 0;display: block;color: #007bff;">Add
                                        another phone number</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mx-4 mb-3"><a
                                        class="btn btn-danger btn-sm shadow-none" role="button" href="#"><i
                                            class="fa fa-remove m-1"></i>Cancel</a>
                                <button class="btn btn-success btn-sm shadow-none" type="submit"><i
                                            class="fa fa-user-plus m-1"></i>Add Role
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection