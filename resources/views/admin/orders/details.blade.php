@extends('admin.layouts.master')

@section('page')
    Order Details
@stop

@section('content')
    <div class="row">

        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center" style="border-bottom-width: 0px;">
                    <h4 class="title">Orders</h4>
                    <p class="category">Order Details</p>
                </div>
                <div class="card-body table-responsive table-full-width">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->date}}</td>
                            <td>{{$order->address}}</td>
                            <td>
                                @if ($order->status)
                                    <span class="badge badge-success">Confirmed</span>
                                @else
                                    <span class="badge badge-warning">Pending</span>
                                @endif
                            </td>
                            <td>
                                @if ($order->status)
                                    {{link_to_route('order.pending','Pending', $order->id,['class'=>'btn btn-warning btn-sm'])}}

                                @else
                                    {{link_to_route('order.confirm','Confirm', $order->id,['class'=>'btn btn-success btn-sm'])}}

                                @endif
                            </td>

                        </tr>



                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card mb-2">
                <div class="card-header text-center" style="border-bottom-width: 0px;">
                    <h4 class="title">User Details</h4>
                    <p class="category">User Details</p>
                </div>
                <div class="card-body table-responsive table-full-width">
                    <table class="table table-hover table-borderless">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <td>{{$order->user->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$order->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$order->user->email}}</td>
                        </tr>

                        <tr>
                            <th>Registered At</th>
                            <td>{{$order->user->created_at->diffForHumans()}}</td>
                        </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center" style="border-bottom-width: 0px;">
                    <h4 class="title">Products Details</h4>
                    <p class="category">Products Details</p>
                </div>
                <div class="card-body table-responsive table-full-width">
                    <table class="table table-borderless table-hover">
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                        </tr>
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>
                                @foreach($order->products as $product)
                                    <table class="table">
                                        <tr>
                                            <td>{{$product->name}}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            </td>

                            <td>
                                @foreach($order->orderItems as $item)
                                    <table class="table">
                                        <tr>
                                            <td>{{$item->price}}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            </td>

                            <td>
                                @foreach($order->orderItems as $item)
                                    <table class="table">
                                        <tr>
                                            <td>{{$item->quantity}}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            </td>

                            <td>
                                @foreach($order->products as $product)
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <img src="{{url('uploads').'/'.$product->image}}" class="img-thumbnail" style="width:2em;">
                                            </td>
                                        </tr>
                                    </table>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
