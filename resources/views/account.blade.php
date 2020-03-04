@extends('layouts.app')

@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4" style="padding: 0px;font-family: Montserrat, sans-serif;font-size: 14px;">
                    @include('comp.sidebar')
                </div>
                <div class="col content-section">
                    <div class="row">
                        <div class="col add-ads">
                            <form>
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <div class="form-group" id="addphone">
                                            <label><strong>add phone number: *</strong>
                                            </label>
                                            <input type="tel" class="form-control" placeholder="add phone number" /><a id="addphonebtn" href="#">add another number</a>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>old password: *</strong>
                                            </label>
                                            <input type="password" class="form-control" placeholder="your old password" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>new password: *</strong>
                                            </label>
                                            <input type="password" class="form-control" placeholder="your new password" />
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label><strong>update your picture: </strong>
                                            </label>
                                            <input type="file" id="files" multiple name="files[]" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row last-form-row">
                                    <div class="col text-right">
                                        <button class="btn" type="submit">update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection