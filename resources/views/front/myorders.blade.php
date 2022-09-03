<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Session;
$total =0;
if (Session::has('wahid'))
{
    $total = HomeController::orderListTotal();
}
?>
@extends('master')
@section('content')
    <section class="py-5">
        <div class="container">
            <h3>My orders</h3>

                @foreach($orders as $order)
                <div class="row ">
                    <div class="col-md-3 mt-3">
                        <div class="card">
                            <img src="{{ asset($order->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="">
                            <h3></h3>
                            <p><strong>Description :</strong>{{ $order->description }}</p>
                            <h6><strong>Price : </strong>{{ $order->price }} Taka</h6>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row mt-5">
                <div style="border-top: 2px solid grey"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class=" col-md-3 mt-3" >
                    <h4 class="mt-3">Total = {{$total}}Taka</h4>
                </div>
            </div>
        </div>
    </section>
@endsection

