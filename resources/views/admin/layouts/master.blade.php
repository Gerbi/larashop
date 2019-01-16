<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>LaraShop Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{url('asset/css/ai.css')}}">

    {{--    {{ Html::style('assets/css/bootstrap.min.css') }}--}}

    {{ Html::style('assets/css/animate.min.css') }}

    {{--    {{ Html::style('assets/css/paper-dashboard.css') }}--}}

    {{ Html::style('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}

    {{--    {{ Html::style('https://fonts.googleapis.com/css?family=Muli:400,300') }}--}}

    {{ Html::style('assets/css/themify-icons.css') }}

    {{ Html::style('assets/css/style.css') }}

</head>
<body>

<br>

{{-- Main Content --}}
<div class="container">
    <div class="card ">
        <div class="card-body" style="padding: 0px">
            {{--<div class="d-flex">--}}
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Larashop Admin</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-settings"></i>
                                    {{auth()->guard('admin')->check() ? auth()->guard()->user()->name : 'Account'}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('/admin/logout')}}">Logout</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </nav>
            {{--</div>--}}
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('page')</li>
        </ol>
    </nav>

    <div class="row">
        {{-- Start Sidebar --}}
        <div class="col-md-3">
            @include('admin.layouts.sidebar')
        </div>
        {{-- End Sidebar --}}

        <div class="col-md-9">

            @yield('content')
        </div>
    </div>
</div>
{{-- End Main Content--}}



<div class="card text-center fixed-bottom" style="border: none">

    <div class="card-footer text-muted" style="border: 0">
        &copy;
        <script>document.write(new Date().getFullYear())</script>
        , made with <i class="fa fa-heart heart"> </i> by <a href="https://t.me/gerbi">Gerbidev</a>
    </div>
</div>

</body>


{{ Html::script('assets/js/jquery-1.10.2.js') }}
{{ Html::script('assets/js/bootstrap.min.js') }}
{{ Html::script('assets/js/script.js') }}

</html>
