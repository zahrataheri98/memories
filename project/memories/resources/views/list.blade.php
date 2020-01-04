<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>نمایش خاطرات</title>
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
        <div class="col-12">
            <img src="img/11.png" class="float-right logo" alt="ثبت خاطره">
        </div>
        <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 mx-auto text-center mt-5">
            <a href="{{route('create')}}" type="button" class="btn new-reg-button">ثبت خاطره جدید</a>
            <div class="row my-5">
                @foreach($memories as $m)
                <div class="box-post col-sm-6">
                    <div class="card lign-middle">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <h5 class="title-post col-sm-6 text-sm-left">{{$m->title}}</h5>
                                    <h6 class="date-post col-sm-6 text-sm-right">1398/5/9</h6>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row" style="padding:1px">
                                <div class="col-4" style="padding:0px">
                                    <a href="{{route('show',[$m->id])}}" class="btn reg-button button-medium col">نمایش</a>
                                </div>
                                <div class="col-4" style="padding:0px 1px">
                                    <a href="{{route('edit',[$m->id])}}" class="btn reg-button button-medium col">ویرایش</a>
                                </div>
                                <div class="col-4" style="padding:0px">
                                    <a href="{{route('delete',[$m->id])}}" class="btn reg-button button-medium col">حذف</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach








            </div>
        </div>
    </div>
</div>

</body>
</html>