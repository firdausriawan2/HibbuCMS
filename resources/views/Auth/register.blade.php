@extends('layouts.auth')

@section('content')
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="{{ asset('BackEnd/assets/img/stisla-fill.svg') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="first_name">First Name</label>
                                            <input id="first_name" type="text" class="form-control" name="first_name"
                                                value="{{ old('first_name') }}" required autofocus
                                                autocomplete="first_name">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="last_name">Last Name</label>
                                            <input id="last_name" type="text" class="form-control" name="last_name"
                                                value="{{ old('last_name') }}" required autofocus autocomplete="last_name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength"
                                                data-indicator="pwindicator" name="password" required
                                                autocomplete="new-password">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password_confirmation" class="d-block">Password
                                                Confirmation</label>
                                            <input id="password_confirmation" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Muhammad Firdaus Riawan 2022
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('CSS')
@endpush

@push('JS')
    <script src="{{ asset('BackEnd/assets/js/page/auth-register.js') }}"></script>
@endpush
