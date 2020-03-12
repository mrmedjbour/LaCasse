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
                            <div class="d-md-flex justify-content-around w-100" style="padding: 5px 3%;">
                                <div style="width: 100%;">
                                    <h6 style="margin-bottom: 1rem;">Personal information :</h6>
                                    <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                        <label class="text-nowrap" for="first-name">Firstname :&nbsp;</label>
                                        <input class="form-control form-control-sm" type="text" id="first-name" readonly="" value="Hamid" disabled="" style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;">
                                    </div>
                                    <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                        <label class="text-nowrap" for="first-name">Lastname :&nbsp;</label>
                                        <input class="form-control form-control-sm" type="text" id="first-name" readonly="" value="Medjbour" disabled="" style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;">
                                    </div>
                                    <div class="form-group d-sm-flex justify-content-sm-between">
                                        <label class="text-nowrap" for="email">Email :&nbsp; &nbsp; &nbsp;</label>
                                        <input class="form-control form-control-sm" type="text" id="first-name" readonly="" value="demo@example.com" disabled="" style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;">
                                    </div>
                                    <h6 style="margin-bottom: 1rem;">Address :</h6>
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <label id="willya" for="email" style="margin: 0;"></label>
                                        <select class="form-control form-control-sm form-control" id="willya" style="color: #444;border: 1px solid #9a9a9a;width: auto !important;min-width: 223px;">
                                            <option value="14">Willya</option>
                                        </select>
                                    </div>
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <label id="daira" for="email" style="margin: 0;"></label>
                                        <select class="form-control form-control-sm form-control" id="daira" style="color: #444;border: 1px solid #9a9a9a;width: auto !important;min-width: 223px;" disabled="">
                                            <option value="14">daira</option>
                                        </select>
                                    </div>
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <label id="commune" for="email" style="margin: 0;"></label>
                                        <select class="form-control form-control-sm form-control" id="commune" style="color: #444;border: 1px solid #9a9a9a;width: auto !important;min-width: 223px;" disabled="">
                                            <option value="14">commune</option>
                                        </select>
                                    </div>
                                    <h6 style="margin-bottom: 1rem;">Phone numbers :</h6>
                                    <div class="form-group">
                                        <input class="form-control form-control-sm" type="tel" placeholder="Phone Number" style="color: #444;border: 1px solid #9a9a9a;display: block;margin: 0 auto;margin-bottom: 1rem;max-width: 300px;" value="0542569990" name="phone[]" inputmode="tel"> <a class="btn shadow-none" role="button" id="addPhoneNumber" href="#" style="padding: 0;display: block;color: #007bff;">Add another phone number</a>
                                    </div>
                                </div>
                                <div class="text-center" id="Profile" style="width: auto;padding: 2px;">
                                    <img class="rounded-circle img-fluid" id="AvatarProfile" src="{{ asset("img/avatar.svg")  }}" alt="Avatar" loading="auto" style="width: 200px;height: 200px;margin: 5px;">
                                    <div class="file btn btn-lg btn-primary" style="position: relative;overflow: hidden;"><span style="font-size: initial;"><i class="fa fa-upload" style="margin-right: 2px;"></i>Choose Avatar</span>
                                        <input type="file" accept="image/*" name="avatar" style="position: absolute;opacity: 0;right: 0;top: 0;">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center justify-content-sm-end m-4">
                                <button class="btn btn-success shadow-none" type="submit"><i class="fa fa-pencil m-1"></i>Save Changes</button>
                            </div>
                        </form>
                        <hr>
                        <fieldset style="padding: 0 3%;margin-bottom: 15px;">
                            <form method="post">
                                <legend>Change Password</legend>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="password">Current Password :&nbsp;</label>
                                    <input class="form-control form-control-sm" type="text" id="password" style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;" placeholder="Password" required="" minlength="6">
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="newpassword">New Password :&nbsp;</label>
                                    <input class="form-control form-control-sm" type="text" id="newpassword" style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;" placeholder="New Password" required="" minlength="6">
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="confirmpassword">Confirm New Password :&nbsp;</label>
                                    <input class="form-control form-control-sm" type="text" id="confirmpassword" style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;" placeholder="Confirm New Password" required="" minlength="6">
                                </div>
                                <button class="btn btn-success shadow-none float-right" type="submit"><i class="fa fa-key m-1"></i>Change password</button>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection