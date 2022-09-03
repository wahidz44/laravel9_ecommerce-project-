@extends('master')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($product->image) }}" alt="" style="width: 100%">
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">{{ $product->name }}</h3>
                    <h4>Price: BDT <span class="display-6">&#x9f3;</span> {{ $product->price }}</h4>
                    <p><strong>Details: </strong>{{ $product->description }}</p>
                    <p><strong>Category:</strong> {{ $product->category }}</p>
                    <form action="{{ route('add_to_cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <button class="btn btn-primary">Add to Card</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
