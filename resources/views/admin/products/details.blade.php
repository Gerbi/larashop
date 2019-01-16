@extends('admin.layouts.master')

@section('page')
    Details Product
@stop

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center" style="border-bottom-width: 0px;">
                    <h4 class="title">Product Detail</h4>
                    <p class="category">List of all stock</p>
                </div>
                <div class="card-body table-responsive table-full-width">
                    <table class="table table-hover table-borderless">
                        <tbody>

                        <tr>
                            <th>ID</th>
                            <td>{{$product->id}}</td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>{{$product->name}}</td>
                        </tr>

                        <tr>
                            <th>Description</th>
                            <td>{{$product->description}}</td>
                        </tr>

                        <tr>
                            <th>Price</th>
                            <td>{{$product->price}}</td>
                        </tr>

                        <tr>
                            <th>Created At</th>
                            <td>{{$product->created_at->diffForHumans()}}</td>
                        </tr>

                        <tr>
                            <th>Updated At</th>
                            <td>{{$product->updated_at->diffForHumans()}}</td>
                        </tr>

                        <tr>
                            <th>Image</th>
                            <td>
                                <img src="{{url('uploads').'/'.$product->image}}" alt="" class="img-thumbnail border-0" style="width: 150px;"></td>
                        </tr>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
@stop
