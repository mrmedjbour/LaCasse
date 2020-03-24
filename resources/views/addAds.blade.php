@extends('layouts.app')

@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4" style="padding: 0px;font-family: Montserrat, sans-serif;font-size: 14px;">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div id="PaddAnn">
                        <form id="addAnn" class="p-4">
                            <div class="d-md-flex" id="top">
                                <div class="w-100">

                                    <div class="form-group">
                                        <label for="ADTYPE" class="weight500">Select Ad type:</label>
                                        <select id="ADTYPE" class="form-control" required>
                                            <option value="1">Sell</option>
                                            <option value="0">Buy</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Make" class="weight500">Select Make:</label>
                                        <select id="Make" name="make" class="form-control" required>
                                            <option selected disabled hidden>Select Make</option>
                                            <option value="1">Seat</option>
                                            <option value="2">Renault</option>
                                            <option value="3">Peugeot</option>
                                            <option value="4">Dacia</option>
                                            <option value="5">Citroen</option>
                                            <option value="6">Opel</option>
                                            <option value="7">Alfa romeo</option>
                                            <option value="8">Skoda</option>
                                            <option value="9">Chevrolet</option>
                                            <option value="10">Porsche</option>
                                            <option value="11">Honda</option>
                                            <option value="12">Subaru</option>
                                            <option value="13">Mazda</option>
                                            <option value="14">Mitsubishi</option>
                                            <option value="15">Lexus</option>
                                            <option value="16">Toyota</option>
                                            <option value="17">Bmw</option>
                                            <option value="18">Volkswagen</option>
                                            <option value="19">Suzuki</option>
                                            <option value="20">Mercedes benz</option>
                                            <option value="21">Saab</option>
                                            <option value="22">Audi</option>
                                            <option value="23">Kia</option>
                                            <option value="24">Land rover</option>
                                            <option value="25">Dodge</option>
                                            <option value="26">Chrysler</option>
                                            <option value="27">Ford</option>
                                            <option value="28">Hummer</option>
                                            <option value="29">Hyundai</option>
                                            <option value="30">Infiniti</option>
                                            <option value="31">Jaguar</option>
                                            <option value="32">Jeep</option>
                                            <option value="33">Nissan</option>
                                            <option value="34">Volvo</option>
                                            <option value="35">Daewoo</option>
                                            <option value="36">Fiat</option>
                                            <option value="37">Mini</option>
                                            <option value="38">Rover</option>
                                            <option value="39">Smart</option>
                                            <option value="40">Chery</option>
                                            <option value="41">Hino</option>
                                            <option value="42">Acura</option>
                                            <option value="43">Dfsk</option>
                                            <option value="44">Dfm</option>
                                            <option value="45">Great wall</option>
                                            <option value="46">Cadillac</option>
                                            <option value="47">Ssangyong</option>
                                            <option value="48">Am general</option>
                                            <option value="49">Avanti Motors</option>
                                            <option value="50">Asia</option>
                                            <option value="51">Baic yinxiang</option>
                                            <option value="52">Baic</option>
                                            <option value="53">Brilliance</option>
                                            <option value="54">Byd</option>
                                            <option value="55">Changan</option>
                                            <option value="56">Changhe</option>
                                            <option value="57">Daihatsu</option>
                                            <option value="58">Datsun</option>
                                            <option value="59">Faw</option>
                                            <option value="60">Foton</option>
                                            <option value="61">Geely</option>
                                            <option value="62">Gonow</option>
                                            <option value="63">Pontiac</option>
                                            <option value="64">Isuzu</option>
                                            <option value="65">Mahindra</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Modele" class="weight500">Select Model:</label>
                                        <select id="Modele" name="modele" class="form-control" disabled required>
                                            <option disabled hidden selected>Select Model</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ModeleYear" class="weight500">Select Year:</label>
                                        <select id="ModeleYear" name="ModeleYear" class="form-control" disabled
                                                required>
                                            <option disabled hidden selected>Select Year</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-100" id="AdUpImgs">
                                    <label class="weight500" for="upInput">Upload images:</label>
                                    <div id="addAdsImgPreview"
                                         class="rounded border border-dark bg-white ml-md-2 mr-md-2">
                                        <div id="upImg"></div>
                                        <input type="file" id="upInput" class="p-1 w-100 bg-success" name="partimg"
                                               multiple="" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="weight500">Description:</label>
                                <textarea class="form-control form-control-lg rounded border border-dark"
                                          rows="3"></textarea>
                            </div>
                            <div class="d-flex flex-column flex-wrap accordion md-accordion mt-3" id="accordionEx"
                                 role="tablist" aria-multiselectable="true">
                                <div class="mb-1">
                                    <a class="btn btn-link text-info font-weight-light p-0" id="SelectAllParts">Select
                                        All</a>&nbsp;/&nbsp;<a class="btn btn-link text-info font-weight-light p-0"
                                                               id="DeSelectAllParts">Deselect All</a>
                                </div>
                                @foreach($Partscat as $Parts)
                                    <div class="card shadow mb-2">
                                        <div id="head-{{ Str::camel($Parts->cat_nom) }}" class="card-header" role="tab">
                                            <input type="checkbox" id="selectAll" class="m-1" title="Select All"
                                                   value="{{ $Parts->cat_id }}" name="parts" cat="{{ $Parts->cat_id }}"
                                                   checked>
                                            <a class="text-decoration-none"
                                               href="#collapse-{{ Str::camel($Parts->cat_nom) }}" data-toggle="collapse"
                                               data-parent="#accordionEx" aria-expanded="false"
                                               aria-controls="collapse-{{ Str::camel($Parts->cat_nom) }}">
                                                <h6 class="mb-0">{{ Str::title($Parts->cat_nom) }}&nbsp;<i
                                                            class="fa fa-angle-down rotate-icon m-1<"></i></h6>
                                            </a>
                                        </div>
                                        <div id="collapse-{{ Str::camel($Parts->cat_nom) }}" class="collapse"
                                             role="tabpanel" aria-labelledby="head-{{ Str::camel($Parts->cat_nom) }}"
                                             data-parent="#accordionEx">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    @foreach($Parts->pieces as $Part)
                                                        <li class="form-check">
                                                            <input type="checkbox" id="{{ $Part->piece_id }}"
                                                                   name="parts" value="{{ $Part->piece_id }}"
                                                                   class="form-check-input" cat="{{ $Parts->cat_id }}"
                                                                   checked>
                                                            <label class="form-check-label"
                                                                   for="{{ $Part->piece_id }}">{{ Str::title($Part->piece_nom) }}</label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <hr>
                            <div class="text-center text-sm-right">
                                <button class="btn btn-success shadow-none m-2" type="submit"><i class="fa fa-file mr-1"></i>Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection