<?php
    use App\Http\Controllers\HomeController;
    use Illuminate\Support\Facades\Session;
    $total =0;
    if (Session::has('wahid'))
    {
        $total = HomeController::cartItem();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{ asset('/') }}assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('/') }}">WeComm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route("myorders")}}">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Link</a>
                </li>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn text-white border" type="button">Search</button>
                </form>
            </ul>
        </div>
        <div>
            <a class="nav-link text-white" href="{{ route('cartlist') }}">Cart({{ $total }})</a>
        </div>

        @if(Session::has('wahid'))
        <div>
            <li class="nav-item dropdown d-flex justify-content-end">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">{{ Session::get('wahid')['name'] }}</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Log Out</a></li>
                </ul>
            </li>
        </div>
        @else
        <div>
            <a class="nav-link text-white" href="{{ route('login') }}">login</a>
        </div>
        <div>
            <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
        </div>
        @endif

    </div>
</nav>
@yield('content')
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class=" my-5">
    <!-- Footer -->
    <footer
        class="text-center text-lg-start text-white"
        style="background-color: #3e4551">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">FOOTER CONTENT</h5>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Molestiae modi cum ipsam ad, illo possimus laborum ut
                            reiciendis obcaecati. Ducimus, quas. Corrupti, pariatur eaque?
                            Reiciendis assumenda iusto sapiente inventore animi?
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white" style="text-decoration: none">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="mb-4" />

            <!-- Section: CTA -->
            <section class="">
                <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3">Register for free</span>
                    <button type="button" class="btn btn-outline-light btn-rounded">
                        Sign up!
                    </button>
                </p>
            </section>
            <!-- Section: CTA -->

            <hr class="mb-4" />

            <!-- Section: Social media -->
            <section class="mb-4 text-center">
                <!-- Facebook -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"
                ><i class="fab fa-facebook-f"></i
                    ></a>

                <!-- Twitter -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"
                ><i class="fab fa-twitter"></i
                    ></a>

                <!-- Google -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"
                ><i class="fab fa-google"></i
                    ></a>

                <!-- Instagram -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"
                ><i class="fab fa-instagram"></i
                    ></a>

                <!-- Linkedin -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"
                ><i class="fab fa-linkedin-in"></i
                    ></a>

                <!-- Github -->
                <a
                    class="btn btn-outline-light btn-floating m-1"
                    href="#!"
                    role="button"
                ><i class="fab fa-github"></i
                    ></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
            class="text-center p-3"
            style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright:
            <a class="text-white" style="text-decoration: none" href="https://github.com/wahidz44/">example.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>
<!-- End of .container -->

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

</body>

{{--Coustom CSS Start--}}
<style>
    .carousel-indicators [data-bs-target]{
        background-color: #0ce541;
    }
    .carousel-control-next-icon{
        color: black;
    }
</style>
{{--Coustom CSS End--}}
</html>



