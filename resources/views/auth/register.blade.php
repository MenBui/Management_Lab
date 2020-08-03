<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Title -->
        <title>Hệ thống Quản lý phòng Lab</title>
        <link rel="shortcut icon" href="front-end/image/Logo_Hust.png">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset('vendor/bootstrap4/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/themify-icons/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">

        <!-- Neptune CSS -->
        <link rel="stylesheet" href="{{asset('css/core.css')}}">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="img-cover" style="background-image: url(front-end/image/bk2017.jpg);">

        <div class="container-fluid">
            <div class="sign-form">
                <div class="row">
                    <div class="col-md-4 offset-md-4 px-3">
                        <div class="box b-a-0">
                            <div class="p-2 text-xs-center">
                                <h5>Đăng ký tài khoản</h5>
                            </div>
                            <form class="form-material" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                                <div class="px-2 form-group mb-0">
                                    <button type="submit" class="btn btn-purple btn-block text-uppercase">Đăng ký</button>
                                </div>
                            </form>
                            <div class="p-2 text-xs-center text-muted">
                                Bạn đã có tài khoản? <a class="text-black" href="pages-sign-up.html#"><span class="underline">Đăng nhập</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor JS -->
        <script type="text/javascript" src="{{asset('vendor/jquery/jquery-1.12.3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendor/tether/js/tether.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
    </body>
</html>