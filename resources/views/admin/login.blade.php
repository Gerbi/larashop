<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>JavasShop Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

</head>
<body>

<div class="wrapper">
    <form class="form-signin" method="post" action="/admin/login">
        @csrf
        <div class="card" style="border: 0;">
            <div class="card-body text-center" style="border: 0;">
                <h4>Please Login</h4>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session()->has('msg'))
                <div class="alert alert-success">{{session()->get('msg')}}</div>

            @endif
            <input type="email" name="email" id="email" placeholder="Email" required="" class="form-control" style="margin-bottom: 15px;" />
            <input type="password" name="password" id="password" placeholder="Password" class="form-control" />

            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </div>

    </form>
</div>


{{--  ss--}}
{{--<div class="container">--}}
    {{--<div class="title text-center">--}}
        {{--<h3><strong>Larashop Admin</strong></h3>--}}
    {{--</div>--}}

    {{--<div class="container" style="margin-top: 80px">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-6 mx-auto">--}}
                {{--<div class="card shadow-sm" style="border: 0; border-radius: 3px">--}}
                    {{--<div class="card-header text-center" style="border-bottom-width: 0px;">--}}
                        {{--<h4 class="title">Sign In</h4>--}}
                    {{--</div>--}}
                    {{--<div class="card-body">--}}

                        {{--@if ($errors->any())--}}
                            {{--<div class="alert alert-danger">--}}
                                {{--<ul>--}}
                                    {{--@foreach($errors->all() as $error)--}}
                                        {{--<li>--}}
                                            {{--{{$error}}--}}
                                        {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--@if (session()->has('msg'))--}}
                            {{--<div class="alert alert-success">{{session()->get('msg')}}</div>--}}

                        {{--@endif--}}
                        {{--<form method="post" action="/admin/login">--}}

                            {{--@csrf--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="email">Email:</label>--}}
                                {{--<input type="email" name="email" id="email" placeholder="Email"--}}
                                       {{--class="form-control">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="password">Password:</label>--}}
                                {{--<input type="password" name="password" id="password" placeholder="Password"--}}
                                       {{--class="form-control">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<button class="btn btn-primary" type="submit">Sign In</button>--}}
                            {{--</div>--}}

                        {{--</form>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</div>--}}

{{--ss--}}

{{-- STart full success--}}

{{--<nav class="navbar navbar-default">--}}
{{--<div class="container-fluid">--}}
{{--<div class="navbar-header">--}}
{{--<a class="navbar-brand" href="#">--}}
{{--LaraShop Admin--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}
{{--<div class="wrapper">--}}
{{--<div class="container" style="margin-top: 50px">--}}
{{--<div class="row">--}}
{{--<div class="col-md-6 mx-auto">--}}
{{--<div class="card shadow-sm" style="border: 0; border-radius: 2px">--}}
{{--<div class="card-header text-center" style="border-bottom-width: 0px;">--}}
{{--<h3 class="title"><strong>Sign In</strong></h3>--}}
{{--</div>--}}

{{--<div class="card-body">--}}

{{--@if ($errors->any())--}}
{{--<div class="alert alert-danger">--}}
{{--<ul>--}}
{{--@foreach($errors->all() as $error)--}}
{{--<li>--}}
{{--{{$error}}--}}
{{--</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--</div>--}}
{{--@endif--}}

{{--@if (session()->has('msg'))--}}
{{--<div class="alert alert-success">{{session()->get('msg')}}</div>--}}

{{--@endif--}}
{{--<form method="post" action="/admin/login">--}}

{{--@csrf--}}

{{--<div class="form-group">--}}
{{--<label for="email">Email:</label>--}}
{{--<input type="email" name="email" id="email" placeholder="Email"--}}
{{--class="form-control">--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<label for="password">Password:</label>--}}
{{--<input type="password" name="password" id="password" placeholder="Password"--}}
{{--class="form-control">--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<button class="btn btn-primary" type="submit">Sign In</button>--}}
{{--</div>--}}

{{--</form>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

</body>

</html>
