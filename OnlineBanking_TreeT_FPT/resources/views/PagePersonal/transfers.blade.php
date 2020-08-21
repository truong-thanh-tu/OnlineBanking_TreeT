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
                            <span>Transfers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Transfers Section Begin -->
    <div class="Transfers">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tillet">
                            <h5>Internal Transfers</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table text-center text-uppercase">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">beneficiary</th>
                                <th scope="col">Bank Account</th>
                                <th scope="col">Money</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th>Nguyen Van B</th>
                                <th>123456789</th>
                                <th>12.300.000 VND</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <th>Nguyen Van B</th>
                                <th>123456789</th>
                                <th>12.300.000 VND</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <th>Nguyen Van B</th>
                                <th>123456789</th>
                                <th>12.300.000 VND</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <th>Nguyen Van B</th>
                                <th>123456789</th>
                                <th>12.300.000 VND</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <th>Nguyen Van B</th>
                                <th>123456789</th>
                                <th>12.300.000 VND</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tillet">
                            <h5>External Transfers</h5>

                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <table class="table text-center text-uppercase">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">beneficiary</th>
                                <th scope="col">Bank Account</th>
                                <th scope="col">Money</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th>Nguyen Van B</th>
                                <th>123456789</th>
                                <th>12.300.000 VND</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <th>Nguyen Van B</th>
                                <th>123456789</th>
                                <th>12.300.000 VND</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <th>Nguyen Van B</th>
                                <th>123456789</th>
                                <th>12.300.000 VND</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <th>Nguyen Van B</th>
                                <th>123456789</th>
                                <th>12.300.000 VND</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <th>Nguyen Van B</th>
                                <th>123456789</th>
                                <th>12.300.000 VND</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Transfers Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        @include('Component.footer')
    </footer>
    <!-- Footer Section End -->

@endsection
