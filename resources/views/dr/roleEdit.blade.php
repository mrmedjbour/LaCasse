@extends('layouts.app')
@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU"> @include('comp.sidebar') </div>
                <div class="col-lg-8 dash-info">
                    <div style="background-color: #f8f8f8;border: 1px solid #d5d5d5;border-radius: 3px;margin-bottom: 10vh;">
                        <form method="post" action="{{ route('role.update', $user->user_id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="w-100" style="padding: 5px 3%;">
                                <h6 style="margin-bottom: 1rem;">Edit User Role</h6>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="first-name">User Role :</label>
                                    <select class="form-control ProfSelects" name="userRole" required>
                                        <option value="3" @if ($user->role_id == 3) selected @endif>Seller</option>
                                        <option value="4" @if ($user->role_id == 4) selected @endif>Buyer</option>
                                    </select>
                                </div>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="first-name">First name :</label>
                                    <input class="form-control ProfInputS" type="text" id="first-name" value="{{ $user->user_prenom  }}" disabled>
                                </div>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="last-name">Last name :</label>
                                    <input class="form-control ProfInputS" type="text" id="last-name" value="{{ $user->user_nom  }}" disabled>
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="email">Email :</label>
                                    <input class="form-control ProfInputS" type="text" id="email" value="{{ $user->email  }}" disabled>
                                </div>
                                <h6>Address :</h6>
                                <p class="text-black-50 pl-1">Chabet Ameur, Isser, Boumerdes</p>
                                @foreach($user->user_tel as $phone)
                                    @if ($loop->first)
                                        <h6 class="mb-1">Phone numbers (optional):</h6>
                                    @endif
                                    <div class="form-group">
                                        <input class="form-control form-control-sm d-block mx-auto mb-2 ProfInputS" type="tel" value="{{ $phone }}" disabled>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-between mx-4 mb-3">
                                <a class="btn btn-danger btn-sm shadow-none" role="button" href="{{ route('role.index') }}"><i class="fa fa-remove m-1"></i>Cancel</a>
                                <button class="btn btn-success btn-sm shadow-none" type="submit"><i class="fa fa-edit m-1"></i>Edit Role</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection