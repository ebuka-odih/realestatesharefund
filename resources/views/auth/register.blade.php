
<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from omah.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 13:28:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Omah :  Property Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:title" content="Omah :  Property Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:description" content="Omah :  Property Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:image" content="social-image.png"/>
    <meta name="format-detection" content="telephone=no">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('dash/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="{{ route('index')  }}">
                                        {{--                                        <img src="images/logo-full.png" alt="">--}}
                                        <h2 style="font-weight: bolder; color: #5e5ee5" >RESF</h2>
                                    </a>
                                </div>
                                <h4 class="text-center mb-4">Sign Up</h4>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif


                                    <div class="form-group">
                                        <label class="mb-1"><strong>Name</strong></label>
                                        <input type="email" name="name" class="form-control" placeholder="fullname">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" name="email" class="form-control" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" name="password" class="form-control" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Confirm Password</strong></label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="confirm password">
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Have an account? <a class="text-primary" href="{{ route('login') }}">Sign In</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('dash/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('dash/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('dash/js/custom.min.js') }}"></script>
<script src="{{ asset('dash/js/deznav-init.js') }}"></script>

</body>


<!-- Mirrored from omah.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 13:28:10 GMT -->
</html>
