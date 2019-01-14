<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="svg" sizes="96x96" href="assets/img/laravel-brands.svg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>LaraShop Home</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{--{{ Html::style('assets/css/bootstrap.min.css') }}--}}

    {{ Html::style('assets/css/heroic-features.css') }}
{{--    {{ Html::style('assets/css/font-awesome.min.css') }}--}}

    {{ Html::style('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}

{{--    {{ Html::style('https://fonts.googleapis.com/css?family=Muli:400,300') }}--}}

    @yield('style')

</head>
<body>
    @include('fronted.layouts.nav')

    <div class="container">

    @yield('content')
    {{--Page features--}}

</div>

</body>


{{ Html::script('assets/js/jquery-3.3.1.slim.min.js') }}
{{ Html::script('assets/js/popper.min.js') }}
{{ Html::script('assets/js/bootstrap.min.js') }}
{{--{{ Html::script('assets/js/script.js') }}--}}

{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}
    @yield('script')
</html>
