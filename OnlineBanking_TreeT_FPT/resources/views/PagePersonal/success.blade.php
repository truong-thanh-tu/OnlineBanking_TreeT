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
                        <h2>Transfers</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Transfers</a>
                            <span> Confirm Information</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!--  Success Section Begin -->
        <div class="success">
            <div class="main">
                <div class="mainSuccess">
                    <div class="icon">
                      <p><i class="fa fa-check-circle" ></i></p>
                    </div>
                    <div class="text">
                        <p>Quý Khách Đã Thực Hiện Chuyển Tiền Thành Công  <span>50.000 VND </span>Cho <span>Nguyen Van A </span>Số Tài Khoản <span>01323232323232</span></p>
                    </div>
                </div>
            </div>
        </div>
    <!-- Success Transfers Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        @include('Component.footer')
    </footer>
    <!-- Footer Section End -->

@endsection
