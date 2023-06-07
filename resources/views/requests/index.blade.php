@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/request.css') }}">
</head>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-white mb-5">
                <div class="card-heading clearfix border-bottom mb-4">
                    <h4 class="card-title">Booking Requests</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="position-relative booking">
                            <div class="media">
                                <div class="msg-img">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-4">Sunny Apartment <span class="badge badge-primary mx-3">Pending</span><span class="badge badge-danger">Unpaid</span></h5>
                                    <div class="mb-3">
                                        <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Booking Date:</span>
                                        <span class="bg-light-blue">02.03.2020 - 04.03.2020</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Booking Details:</span>
                                        <span class="bg-light-blue">2 Adults</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Price:</span>
                                        <span class="bg-light-blue">$147</span>
                                    </div>
                                    <div class="mb-5">
                                        <span class="mr-2 d-block d-sm-inline-block mb-1 mb-sm-0">Clients:</span>
                                        <span class="border-right pr-2 mr-2">John Inoue</span>
                                        <span class="border-right pr-2 mr-2"> john@example.com</span>
                                        <span>123-563-789</span>
                                    </div>
                                    <a href="#" class="btn-gray">Send Message</a>
                                </div>
                            </div>
                            <div class="buttons-to-right">
                                <a href="#" class="btn-gray mr-2"><i class="far fa-times-circle mr-2"></i> Reject</a>
                                <a href="#" class="btn-gray"><i class="far fa-check-circle mr-2"></i> Approve</a>
                            </div>
                        </li>

                        <li class="position-relative booking">
                            <div class="media">
                                <div class="msg-img">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-4">Burger House <span class="badge badge-success ml-3">Approved</span></h5>
                                    <div class="mb-3">
                                        <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Booking Date:</span>
                                        <span class="bg-light-green">06.03.2020 - 07.03.2020</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Booking Details:</span>
                                        <span class="bg-light-green">2 Adults, 2 Children</span>
                                    </div>

                                    <div class="mb-5">
                                        <span class="mr-2 d-block d-sm-inline-block mb-1 mb-sm-0">Clients:</span>
                                        <span class="border-right pr-2 mr-2">Jaime Cressey</span>
                                        <span class="border-right pr-2 mr-2"> jaime@example.com</span>
                                        <span>355-456-789</span>
                                    </div>
                                    <a href="#" class="btn-gray">Send Message</a>
                                </div>
                            </div>
                            <div class="buttons-to-right">
                                <a href="#" class="btn-gray mr-2"><i class="far fa-times-circle mr-2"></i>Cancled</a>
                            </div>
                        </li>

                        <li class="position-relative booking">
                            <div class="media">
                                <div class="msg-img">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-4">Modern Hotel <span class="badge badge-danger ml-3">Cancled</span></h5>
                                    <div class="mb-3">
                                        <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Booking Date:</span>
                                        <span class="btn-gray">20.03.2020 - 24.03.2020</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Booking Details:</span>
                                        <span class="btn-gray">2 Adults</span>
                                    </div>
                                    <div>
                                        <span class="mr-2 d-block d-sm-inline-block mb-1 mb-sm-0">Clients:</span>
                                        <span class="border-right pr-2 mr-2">Tesha Stovall</span>
                                        <span class="border-right pr-2 mr-2"> tesha@example.com</span>
                                        <span>123-456-684</span>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
