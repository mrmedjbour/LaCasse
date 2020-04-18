@extends('layouts.app')

@section('content')
    <section>
        <div class="container profile-content">
            <div class="row">
                <div class="col profile-header">
                    <div style="background-image: @if ($casse->casse_image) url('{{asset('/files/casse/'.$casse->casse_image)}}') @else url('{{asset('/img/casse-placeholder.jpg')}}') @endif">
                        <img class="rounded-circle" src="{{ asset('/files/avatar/' . $casse->user->user_avatar) }}"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col available">
                    <div class="row">
                        <div class="col">
                            <h5 class="titleH">{{ __('Available') }}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @foreach($av_marques as $marque)
                                <div class="available-brand mt-2">
                                    <img src="{{ asset('/files/marque/'.$marque->marque_symbole) }}">
                                    <h5>{{ Str::title($marque->marque_nom) }}</h5>
                                    <div class="text-left">
                                        <div class="row model-dispo">
                                            @foreach($marque->modeles as $modele)
                                                <div class="col col-11 col-sm-5 col-md-4">
                                                    <span class="px-2">{{ $modele->modele_nom }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 casse-side">
                    <h2 class="text-center">{{ Str::title($casse->casse_nom) }}</h2>
                    <div class="table-responsive table-borderless px-1">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            @foreach($casse->user->user_tel as $phone)
                                <tr>
                                    <td width="30%">
                                        <a class="text-nowrap partPhones" href="tel:{{ phone($phone, 'DZ') }}" target="_blank"><i class="fas fa-phone-square-alt fa-lg"></i>{{ phone($phone, 'DZ') }}</a>
                                    </td>
                                    <td>({{ Str::title($casse->user->user_prenom) }})</td>
                                </tr>
                            @endforeach
                            @if ($casse->user->role_id == 2)
                                @foreach($casse->seller as $employee)
                                    @foreach($employee->user_tel as $phone)
                                        <tr>
                                            <td width="30%">
                                                <a class="text-nowrap partPhones" href="tel:{{ phone($phone, 'DZ') }}" target="_blank"><i class="fas fa-phone-square-alt fa-lg"></i>{{ phone($phone, 'DZ') }}</a>
                                            </td>
                                            <td>({{ Str::title($employee->user_prenom) }})</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                                @foreach($casse->buyer as $employee)
                                    @foreach($employee->user_tel as $phone)
                                        <tr>
                                            <td width="30%">
                                                <a class="text-nowrap partPhones" href="tel:{{ phone($phone, 'DZ') }}" target="_blank"><i class="fas fa-phone-square-alt fa-lg"></i>{{ phone($phone, 'DZ') }}</a>
                                            </td>
                                            <td>({{ Str::title($employee->user_prenom) }})</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="casse-side-info py-2 px-4">
                        <span>
                            <i class="fa fa-map-marker" style="color: #0078c3;"></i><br>
                            <span class="social-side-info-text-last">{{ Str::title($casse->casse_adr) }}<br>{{ Str::title($casse->commune->commune_nom.' '.$casse->commune->daira->daira_nom.', '.$casse->commune->daira->wilaya->wilaya_nom) }}</span>
                        </span>
                    </div>
                    {{--                    <div class="text-center casse-social">--}}
                    {{--                        <a href="#"><i class="fa fa-facebook-square" style="color: #005992;"></i></a>--}}
                    {{--                        <a href="#" <i class="fa fa-youtube-play" style="color: #d40e0e;"></i></a>--}}
                    {{--                        <a href="#"><i class="fa fa-twitter" style="color: #0078c3;"></i></a>--}}
                    {{--                    </div>--}}
                    @if ($casse->casse_loc != "0,0" AND $casse->casse_loc != null)
                        <?php $loc = explode(",", $casse->casse_loc); ?>
                        <div style="height: 300px;margin-top: 20px;">
                            <div style="border: 1px solid #7d7d7d;">
                                @map(['lat' => $loc[0], 'lng' => $loc[1], 'zoom' => 7, 'markers' => [['title' => $casse->casse_nom, 'lat' => $loc[0], 'lng' => $loc[1], 'popup' => "<h6>$casse->casse_nom</h6>", ],],])
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection