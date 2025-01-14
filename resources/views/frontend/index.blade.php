@extends('frontend.layouts.main')

@section('main-container')

<br><br>
<div class="pcoded-content mt-3">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                        <p class="m-b-0">Welcome to NUSRAT TRUST</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- Task, Page, Download Counter Start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-red">{{ $totalDonors ?? 00 }}</h4>
                                            <h6 class="text-muted m-b-0">Food Help</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-calendar-check-o f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-purple">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">Current Month Status<br>
                                             Paid: <span style="font-size:20px; color: red;">{{ $paidDonorCount }}</span> |  
                                             Unpaid: <span style="font-size:20px; color: red;">{{ $unpaidDonorCount }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Task, Page, Download Counter Start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-red">{{ $totalDonors ?? 00 }}</h4>
                                            <h6 class="text-muted m-b-0">Food Help</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-calendar-check-o f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-purple">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">Current Month Status<br>
                                             Paid: <span style="font-size:20px; color: red;">{{ $paidDonorCount }}</span> |  
                                             Unpaid: <span style="font-size:20px; color: red;">{{ $unpaidDonorCount }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add similar blocks for other schemes -->

                        <!-- Food Help Scheme Donors -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h5 class="card-header-text text-white">Food Help Scheme Donors</h5>
                                    <button class="btn-danger">Not Paid</button>
                                </div>
                                <div class="card-block">
                                    <div class="card-header">
                                        <span>Search <code><input type="text" placeholder="Search..."></code></span>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Contact</th>
                                                    <th>Unpaid Months</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($unpaidDonors as $donor)
                                                <tr>
                                                    <td>{{ $donor->name }}</td>
                                                    <td>{{ $donor->contact_no }}</td>
                                                   
                                                    <td>
                                                        <button class="btn btn-danger btn-sm">
                                                            <a class="text-white" href="{{ route('view.details', $donor->id) }}">View Details</a>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mahana Kifalat Scheme Donors -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h5 class="card-header-text text-white">Mahana Kifalat Scheme Donors</h5>
                                    <button class="btn-danger">Not Paid</button>
                                </div>
                                <div class="card-block">
                                    <div class="card-header">
                                        <span>Search <code><input type="text" placeholder="Search..."></code></span>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No. Child</th>
                                                    <th>Name</th>
                                                    <th>Contact</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td><button class="btn-danger">Not Paid</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td><button class="btn-danger">Unpaid</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td><button class="btn-danger">Unpaid</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mahana Kifalat Scheme Donors -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
