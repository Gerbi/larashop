@extends('admin.layouts.master')

@section('page')
    Add Product
@stop

@section('content')
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">

            @include('admin.layouts.message')
            {{--<nav aria-label="breadcrumb">--}}
                {{--<ol class="breadcrumb text-center">--}}
                    {{--<li class="breadcrumb-item active text-center" aria-current="page"><h5>Add Product</h5></li>--}}
                {{--</ol>--}}
            {{--</nav>--}}
            <div class="card">
                <div class="card-header text-center" style="border-bottom-width: 0px;">
                    <h5>Add Product</h5>
                </div>

                <div class="card-body">

                    {!! Form::open(['url' => 'admin/products','files'=>'true']) !!}
                        <div class="row">
                            <div class="col-md-12">

                                @include('admin.products._fields')

                                <div class="form--group">
                                    {{ Form::submit('Add Product', ['class' => 'btn btn-info btn-fill btn-wd'])}}
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop
