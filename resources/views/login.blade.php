@extends('master')
@section('content')
   <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col-md-4 mx-auto">
              <div class="card">
                  <div class="card-header">
                      <h3 class="text-center">Login page</h3>
                  </div>
                  <div class="card-body">
                      <form action="{{ route('login') }}" method="post">
                          @csrf
                          <div class="row mt-3">
                              <div class="label">Email</div>
                              <input type="email" name="email" class="form-control">
                          </div>
                          <div class="row mt-3">
                              <div class="label">Password</div>
                              <input type="password" name="password" class="form-control">
                          </div>
                          <div class="row mt-3">
                              <div class="label"></div>
                              <input type="submit" class="form-control btn btn-success">
                          </div>
                      </form>
                  </div>
              </div>
               </div>
           </div>
       </div>
   </section>
@endsection
