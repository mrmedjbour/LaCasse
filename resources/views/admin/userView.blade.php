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
                                    <h6 style="margin-bottom: 1rem;">User information :</h6>
                                    <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                        <label class="text-nowrap" for="first-name">Role :&nbsp;</label>
                                        <input class="form-control form-control-sm" type="text" id="first-name"
                                               readonly="" value="Client" disabled=""
                                               style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;">
                                    </div>
                                    <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                        <label class="text-nowrap" for="first-name">Firstname :&nbsp;</label>
                                        <input class="form-control form-control-sm" type="text" id="first-name"
                                               readonly="" value="Hamid" disabled=""
                                               style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;">
                                    </div>
                                    <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                        <label class="text-nowrap" for="first-name">Lastname :&nbsp;</label>
                                        <input class="form-control form-control-sm" type="text" id="first-name"
                                               readonly="" value="Medjbour" disabled=""
                                               style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;">
                                    </div>
                                    <div class="form-group d-sm-flex justify-content-sm-between">
                                        <label class="text-nowrap" for="email">Email :&nbsp; &nbsp; &nbsp;</label>
                                        <input class="form-control form-control-sm" type="text" id="first-name"
                                               readonly="" value="demo@example.com" disabled=""
                                               style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;">
                                    </div>
                                    <h6 class="mb-1" style="margin-bottom: 1rem;">Address :</h6>
                                    <p class="font-weight-light pl-2 text-dark">Cheloute, isser, boumerdes</p>
                                    <h6 class="mb-1" style="margin-bottom: 1rem;">Phone numbers :</h6>
                                    <input class="form-control form-control-sm d-block mb-1 ml-2" type="tel"
                                           placeholder="Phone Number"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 250px;"
                                           value="0654000000" inputmode="tel" disabled="" readonly="">
                                    <input class="form-control form-control-sm d-block mb-1 ml-2" type="tel"
                                           placeholder="Phone Number"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 250px;"
                                           value="0540000000" inputmode="tel" disabled="" readonly="">
                                </div>
                                <div class="text-center" id="Profile" style="width: auto;padding: 2px;">
                                    <img class="rounded-circle img-fluid" id="AvatarProfile"
                                         src="{{ asset('img/avatar.svg') }}" alt="Avatar" loading="auto"
                                         style="width: 200px;height: 200px;margin: 5px;">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start justify-content-xl-start mx-4 mb-3 mt-1"><a
                                        class="btn btn-dark shadow-none" role="button" href="#"><i
                                            class="fa fa-chevron-left m-1"></i>&nbsp;Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection