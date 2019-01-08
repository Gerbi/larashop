@extends('admin.layouts.master')

@section('page')
    User Details
@stop

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">{{$orders[0]->user->name}} | Order Details</h4>
                    <p class="category">List of all registered users</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Address</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)

                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->products[0]->name}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->orderItems[0]->quantity}}</td>
                                <td>{{$order->orderItems[0]->price}}</td>
                                <td>{{$order->created_at->diffForHumans()}}</td>
                                <td>
                                    @if ($order->status)
                                        <span for="" class="label label-success">Confirmed</span>
                                        @else
                                        <span for="" class="label label-warning">Pending</span>

                                    @endif
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop
