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
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label><strong>Select Ad type: *</strong>
                                            </label>
                                            <select class="form-control">
                                                <optgroup label="This is a group">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Select Make: *</strong>
                                            </label>
                                            <select class="form-control">
                                                <optgroup label="This is a group">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Select Model: *</strong>
                                            </label>
                                            <select class="form-control">
                                                <optgroup label="This is a group">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Select Year: *</strong>
                                            </label>
                                            <select class="form-control">
                                                <optgroup label="This is a group">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label><strong>Upload images: </strong>
                                            </label>
                                            <input type="file" id="files" multiple="" name="files[]">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label><strong>Description: </strong>
                                            </label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row d-block">
                                    <div class="col part-selection"><span><strong>select all parts available</strong></span>
                                    </div>
                                    <div class="col" id="piece-category">
                                        <div class="card">
                                            <div class="card-header"> <i class="fa fa-eye"></i>
                                                <a class="card-link" href="#category-name-collaps" data-toggle="collapse"><strong>category-name</strong></a>
                                            </div>
                                            <div id="category-name-collaps" class="collapse" data-parent="#piece-category">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" />
                                                                <label class="form-check-label" for="checkAll">check all</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="piece1" />
                                                                <label class="form-check-label" for="piece1">piece 1</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="piece2" />
                                                                <label class="form-check-label" for="piece2">piece 2</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header"><i class="fa fa-eye"></i><a class="card-link" href="#category-name2-collaps" data-toggle="collapse"><strong>category-name2</strong></a>
                                            </div>
                                            <div id="category-name2-collaps" class="collapse" data-parent="#piece-category">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll1" />
                                                                <label class="form-check-label" for="checkAll">check all</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="piecen" />
                                                                <label class="form-check-label" for="piecen">piece n</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="piecenn" />
                                                                <label class="form-check-label" for="piecenn">piece nn</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row last-form-row">
                                    <div class="col text-right">
                                        <button class="btn" type="submit">Add</button>
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