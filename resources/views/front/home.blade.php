@extends('master')
@section('content')

{{--Slider Start--}}
  <div class="slider">
      <!-- Carousel -->
      <div id="demo" class="carousel slide" data-bs-ride="carousel">

          <!-- Indicators/dots -->
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
              @foreach($products as $item)
              <div class="carousel-item {{$item['id'] == $lastId? 'active' : ''}}">
                  <img src="{{$item['image']}}" alt="Los Angeles" class="d-block" style="width:100%; height: 500px">
                  <div class="carousel-caption">
                      <h3>{{$item->name}}</h3>
                      <p>Price: {{ $item->price }}</p>
                  </div>
              </div>
              @endforeach
          </div>

          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
          </button>
      </div>
  </div>
{{--Slider End--}}

{{--Card Item Start--}}
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($cardItem as $item)
            <div class="col-md-3">
                <a href="{{ route('product_details',['id'=>$item->id]) }}" class="nav-link text-black">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3 class="text-center">{{ $item->name }}</h3>
                        </div>
                        <div class="card-body">
                            <img src="{{asset($item->image)}}" alt="" style="width:100%; height: 300px;">
                            <h5 class="mt-3">Price: BDT {{ $item->price }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{--Card Item End--}}
@endsection
