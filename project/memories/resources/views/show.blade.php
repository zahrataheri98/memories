<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>نمایش خاطره</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="/css/bootstrap-rtl.css" media="screen">
    <link rel="stylesheet" href="/css/style.css" media="screen">
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
        <div class="col-12">
            <img src="/img/11.png" class="float-right logo" alt="ثبت خاطره">
        </div>
        <div class="col-xl-7 col-lg-11 col-md-12 col-sm-12 mx-auto text-center mt-5">
            <h3 class="title-single">{{$memory->title}}</h3>

            <div class="overflow-auto p-3 my-4 text-left" style="height:350px;">
                {{$memory->description}}
            </div>
            <a href="{{route('getList')}}" class="btn reg-button btn-sm my-4 button-default">بازگشت</a>

        </div>
    </div>
</div>

</body>
</html>