@extends('admin.layouts.master')

@section('page')
    User Details
@stop

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center" style="border-bottom-width: 0px;">
                    <h4 class="title">{{$orders[0]->user->name}} | Order Details</h4>
                    <p class="category">List of all registered users</p>
                </div>
                <div class="card-body table-responsive table-full-width">
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>
                                        @foreach($order->products as $item)
                                            <table class="table">
                                                <tr>
                                                    <td>{{$item->name}}</td>
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
                                        @foreach($order->orderItems as $item)
                                            <table class="table">
                                                <tr>
                                                    <td>${{$item->price}}</td>
                                                </tr>
                                            </table>
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($order->status)
                                            <span class="badge badge-success">Confirmed</span>
                                        @else
                                            <span class="badge badge-warning">Pending</span>
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
