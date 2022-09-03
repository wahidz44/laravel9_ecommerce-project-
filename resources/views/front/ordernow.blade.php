@extends('master')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                  <div class="card">
                      <div class="card-header text-center">Order Chart</div>
                      <div class="card-body">
                          <table class="table table-responsive table-bordered">
                            <tbody>
                                <tr>
                                    <td>Amount</td>
                                    <td>${{$total}}</td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>$0</td>
                                </tr>
                                <tr>
                                    <td>Delivery</td>
                                    <td>$20</td>
                                </tr>
                                <tr>
                                    <td><h6>Total Amount</h6></td>
                                    <td>${{$total+20}}</td>
                                </tr>
                            </tbody>
                          </table>
                      </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{ route('orderplace') }}" method="post">
                        @csrf
                        <div class="row mt-3">
                            <label for="">Your Address :</label>
                          <div class="col-md-12">
                              <textarea name="address" placeholder="Type your address" rows="5" class="form-control"></textarea>
                          </div>
                        </div>
                        <h5 class="mt-3">Payment Method</h5>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" value="cash" name="payment" checked>
                            <label class="form-check-label" for="radio1">Online Payment</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" value="cash" name="payment">
                            <label class="form-check-label" for="radio2">EMI Payment</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" value="cash" name="payment">
                            <label class="form-check-label">Payment on Delivery</label>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Order Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
