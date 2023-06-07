@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
</head>

<div class="container-fluid">
    <div class="container text-center">
        <h1>Thank you.</h1>
        <p class="lead w-lg-50 mx-auto">Your order has been placed successfully.</p>
        <p class="w-lg-50 mx-auto">Your order number is <a href="#">9237427634826</a>. We will immediatelly process your and it will be delivered in 2 - 5 business days.</p>
    </div>
    <div class="container">
        <h2 class="h5 mb-5 text-center">You may also like these products</h2>
        <div class="row">
            <div class="col-lg-3">
                <div class="card text-center mb-3">
                    <div class="py-5 px-4">
                        <img src="{{ asset('img/8.jpeg') }}" alt="" class="img-fluid mb-4" />
                        <h3 class="fs-6 text-truncate"><a href="#" class="stretched-link text-reset">Expands your thinking and valuable information</a></h3>
                        <span class="text-success">$799.00</span> <del class="text-muted">$650.83</del>
                    </div>
                    <div class="bg-danger text-white small position-absolute end-0 top-0 px-2 py-2 lh-1 text-center">
                        <span class="d-block">10%</span>
                        <span class="d-block">OFF</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-center position-relative mb-3">
                    <div class="py-5 px-4">
                        <img src="{{ asset('img/1.jpeg') }}" alt="" class="img-fluid mb-4" />
                        <h3 class="fs-6 text-truncate"><a href="#" class="stretched-link text-reset">It gives you stability of thinking and valuable information</a></h3>
                        <span class="text-success">$250.00</span> <del class="text-muted">$250</del>
                    </div>
                    <div class="bg-danger text-white small position-absolute end-0 top-0 px-2 py-2 lh-1 text-center">
                        <span class="d-block">25%</span>
                        <span class="d-block">OFF</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-center mb-3">
                    <div class="py-5 px-4" >
                        <img src="{{ asset('img/10.jpeg') }}" alt="" class="img-fluid mb-4" />
                        <h3 class="fs-6 text-truncate"><a href="#" class="stretched-link text-reset">This book contains a lot of information that will benefit you in your waking life</a></h3>
                        <span class="text-success">$29.00</span> <del class="text-muted">$14.50</del>
                    </div>
                    <div class="bg-danger text-white small position-absolute end-0 top-0 px-2 py-2 lh-1 text-center">
                        <span class="d-block">50%</span>
                        <span class="d-block">OFF</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-center mb-3 w-20">
                    <div class="py-5 px-4">
                        <img src="{{ asset('img/13.jpeg') }}"  alt="" class="img-fluid mb-4" />
                        <h3 class="fs-6 text-truncate"><a href="#" class="stretched-link text-reset">It gives you stability of thinking and fills your heart with reassurance</a></h3>
                        <span class="text-success">$110.00</span> <del class="text-muted">$85.23</del>
                    </div>
                    <div class="bg-danger text-white small position-absolute end-0 top-0 px-2 py-2 lh-1 text-center">
                        <span class="d-block">25%</span>
                        <span class="d-block">OFF</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
