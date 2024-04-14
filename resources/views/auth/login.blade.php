<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/iofrm-theme19.css') }}">

</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
                @if (isset($usernamee))

                <div class=" text-center">
                    <h3 class="text-center alert alert-success">Your Username is  {{$usernamee}} </h3>
                </div>
                @endif
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login </h3>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="text" name="username_or_email" placeholder="Enter user name or email" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                                <a href="#">Forgot password?</a>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
                        <div class="other-links" style="display: flex;flex-direction:column;justify-content:center ;align-item:center;text-align:center">
                            <div class="text">Or login with</div>

                            <a href="#"><i class="fab fa-google"></i>Google</a>

                        </div>
                        <div class="page-links">
                            <a href="{{ route('register.show') }}">Register new account</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
{{-- <script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script> --}}
</body>
</html>
