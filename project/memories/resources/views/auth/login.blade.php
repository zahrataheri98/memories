<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>ورود کاربر</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap-rtl.css" media="screen">
    <link rel="stylesheet" href="css/style.css" media="screen">
</head>
<body class="rtl" style="background:#f2f2f2">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex" href="{{ url('/') }}">

            <div class="pl-3">خاطرات آنلاین</div>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">ورود</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
                        </li>
                    @endif
                @else

                    <div>
                        <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('خروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mx-auto text-center">
            <img src="img/11.png" class="col mt-5" alt="ثبت خاطره">
            <form method="POST" action="{{ route('login') }}">
                        @csrf




                <input type="text" class="form-control form-control-sm @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="نام کاربری">
                @error('username')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror



                <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="رمز عبور">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror





                <div class="clearfix">
					<span class="custom-checkbox float-right checkbox1">
						<input type="checkbox" class="custom-control-input" id="customCheck1" checked="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						<label class="custom-control-label" for="customCheck1">مرا به خاطر بسپار</label>
					</span>
                    <span class="float-left">
						<a  class="btn reg-button button-mini" href="{{ route('register') }}" >ثبت نام</a>
					</span>
                </div>
                <button type="submit" class="btn reg-button btn-sm my-5 button-default">ورود</button>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

