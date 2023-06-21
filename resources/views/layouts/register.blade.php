<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Restaurants</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

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

                                <form action="/register" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <label for="your_name" class="form-label text-black">your_name</label>
                                        <input type="text" name="your_name" class="form-control" id="your_name"
                                            required value="{{ old('your_name') }}" placeholder="your_name">
                                        @error('your_name')
                                            <div class="invalid-feedback text-danger">Please, enter your name!
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="username" class="form-label text-black">Username</label>
                                        <input type="username" name="username" class="form-control" id="username"
                                            required value="{{ old('username') }}">
                                        @error('username')
                                            <div class="invalid-feedback text-danger">Please enter a valid Email adddress!
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="your_email" class="form-labe l text-black">your_email</label>
                                        <input type="text" name="your_email" class="form-control" id="your_email"
                                            required value="{{ old('your_email') }}">
                                        <div class="input-group has-validation">
                                            <span class="input-group-text text-black" id="inputGroupPrepend">@</span>
                                            @error('your_email')
                                                <div class="invalid-feedback text-danger">Please choose a username.
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="Password" class="form-label text-black">Password</label>
                                        <input type="password" name="password" class="form-control" id="Password"
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
                                            <input class="form-check-input" name="terms" type="checkbox"
                                                value="" id="acceptTerms" required>
                                            <div class="invalid-feedback text-black text-black">You must agree before
                                                submitting.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="btn btn-primary w-100" type="submit">
                                            <a href="/register" class="text-white"> Create Account</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    </div>
                                </form>
                                <small class="d-block mt-3">Already have an account? <a class="text-primary"
                                        href="/login"> Login
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

</body>

</html>
