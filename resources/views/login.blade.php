@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3">
                <div class="card-body">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4 text-black">
                            Login to Your Account
                        </h5>
                        <p class="text-center small text-black">
                            Enter your username & password to login
                        </p>
                    </div>

                    <form action="/login" method="post">
                        @csrf
                        <div class="col-12">
                            <input type="text" name="username" class="form-control"
                                @error('username') is-invalid @enderror id="username" autofocus placeholder="username"
                                autofocus required value="{{ old('username') }}" />
                            <label for="username" class="form-label text-black">username or Your email</label>
                            @error('username')
                                <div class="input-group has-validation">
                                    <span class="input-group-text text-black" id="inputGroupPrepend">@</span>
                                    <div class="invalid-feedback text-black">
                                        {{ $message }}
                                        Please enter your username.
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="password" name="password" class="form-control"
                                @error('password') is-invalid @enderror id="password"autofocus required
                                value="{{ old('password') }}" />
                            <label for="password" class="form-label text-black">password</label>
                            @error('password')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                    Please enter your password!
                                </div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" value="true"
                                    id="rememberMe" />
                                <label class="form-check-label text-black " for="rememberMe">Remember
                                    me</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="btn btn-primary w-100" type="submit">
                                <a href="/layouts.main" class="w-100 btn btn-lg btn-primary mt-3">login</a>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <p class="small mb-0 text-black">
                                Don t have account?
                                <a href="/register">Create an account</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
