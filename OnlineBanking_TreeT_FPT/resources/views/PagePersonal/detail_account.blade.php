@extends('Layout.master')
@section('main')
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu">
        @include('Component.my_offcanvas-menu')
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        @include('Component.my_header')
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="{{ asset('img/breadcrumb/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Account</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Account</a>
                            <span>Detail Account</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Detail Account Section Begin -->
    <div class="Detail_Account">
        <div class="container">
            <div class="main">
                <div class="tillet">
                    <h4>Account details </h4>
                </div>
                <div class="informationCustomer">
                    <table class="table text-center p-3">
                        <tr>
                            <th>Name Account</th>
                            <td>Nguyen Van A</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>nguyenvana@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>Tu Liem - Ha Noi</td>
                        </tr>
                        <tr>
                            <th>Bank Account</th>
                            <td>123456789</td>
                        </tr>
                        <tr>
                            <th>Account Type</th>
                            <td>Savings deposit</td>
                        </tr>
                        <tr>
                            <th>Balance</th>
                            <td>1.202.202 VND</td>
                        </tr>
                    </table>
                    <div class="back">
                        <a class="btn btn-primary" href="{{ Route('List_Account') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Account Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        @include('Component.footer')
    </footer>
    <!-- Footer Section End -->

@endsection
