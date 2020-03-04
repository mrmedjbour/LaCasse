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
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label><strong>Casse name: *</strong>
                                            </label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Casse street: *</strong>
                                            </label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>addresse: *</strong>
                                            </label>
                                            <select class="form-control">
                                                <optgroup label="wilaya">
                                                    <option value="16">alger</option>
                                                    <option value="35" selected>boumerdes</option>
                                                    <option value="14">ak fahem</option>
                                                </optgroup>
                                            </select>
                                            <select class="form-control">
                                                <optgroup label="daira">
                                                    <option value="1" selected>boumerdes</option>
                                                    <option value="13">isser</option>
                                                    <option value="14">ak fahem</option>
                                                </optgroup>
                                            </select>
                                            <select class="form-control">
                                                <optgroup label="commune">
                                                    <option value="12" selected>corso</option>
                                                    <option value="13">ak fahem</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>trade register number: *</strong>
                                            </label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Upload trade register picture: </strong>
                                            </label>
                                            <input type="file" id="files" multiple name="files[]" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row last-form-row">
                                    <div class="col text-right">
                                        <button class="btn" type="submit">submit</button>
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