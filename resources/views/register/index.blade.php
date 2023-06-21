@extends('layouts.register')
@section('container')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif

    @if (session()->has('loginerror'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginerror') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif

    {{--  <start main>  --}}
    <main>
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4 text-black">Create an Account</h5>
                                    <p class="text-center small text-black">Enter your personal details to create
                                        account</p>
                                </div>

                                <form action="{{ route('register.post') }}" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <label for="username" class="form-label text-black">Username</label>
                                        <input type="username" name="username"
                                            class="form-control @error('username') is-invalid @enderror" id="username"
                                            placeholder="username" required value="{{ old('username') }}">
                                        @error('username')
                                            <div class="invalid-feedback text-danger">Please enter a valid !
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label text-black">Email</label>
                                        <input type="name@gmail.com" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="email" required value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback text-danger">Please enter a valid Email adddress!
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <label for="Password" class="form-label text-black">Password</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" id="Password"
                                            required value="{{ old('password') }}">
                                        @error('Password')
                                            <div class="invalid-feedback text-danger">Please enter your password!
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <label class="form-check-label text-black" for="acceptTerms">I agree and
                                                accept the <a href="#">terms and conditions</a></label>
                                            <input class="form-check-input" name="terms" type="checkbox" value=""
                                                id="acceptTerms">
                                            <div class="invalid-feedback text-black text-black">You must agree before
                                                submitting.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">
                                            Create Account
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <small class="d-block mt-3">Already have an account? <a class="text-primary" href="/login">
                                    Login
                                    Here</a></small>

                        </div>
                    </div>

                </div>
            </div>
            </div>

        </section>

        </div>
    </main>
    <!-- End #main -->
