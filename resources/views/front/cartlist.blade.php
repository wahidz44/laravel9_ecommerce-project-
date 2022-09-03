<?php
    use App\Http\Controllers\HomeController;
    use Illuminate\Support\Facades\Session;
    $total =0;
    if (Session::has('wahid'))
    {
        $total = HomeController::cartListTotal();
    }
?>
@extends('master')
@section('content')
    <section class="py-5">
        <div class="container">
                 <h3>Result for Products</h3>

            @foreach($products as $item)
                <div class="row ">
                     <div class="col-md-3 mt-3">
                         <div class="card">
                             <img src="{{ asset($item->image) }}" alt="">
                         </div>
                     </div>
                     <div class="col-md-3 mt-3">
                         <div class="">
                            <h3>{{ $item->name }}</h3>
                             <p><strong>Description :</strong>{{ $item->description }}</p>
                             <h6><strong>Price :</strong> {{ $item->price }}</h6>
                         </div>
                     </div>
                     <div class="col-md-3 mt-3">
                         <div class="">
                             <a href="{{ route('removecart',$item->cart_id) }}" class="btn btn-danger">Remove to Card</a>
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
                    <h4 class="mt-3">Total = {{$total}} Taka</h4>
                </div>
                <div class="col-md-3 mt-3">
                    <a href="{{ route('ordernow') }}" class="btn btn-success mt-3">Order Now</a>
                </div>
            </div>
         </div>
    </section>
@endsection

