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
                            <span>Information Accounts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- List Of Account Section Begin -->
    <div class="listOfAccount">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tillet">
                            <h4>Bank Accounts Of This Login Account</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search">
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0" type="submit">Search</button>
                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                       aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table class="table text-center">
                        <thead class="text-uppercase">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Bank Account</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Status</th>
                            <th scope="col">View</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Nguyen Van A</th>
                            <th scope="col">123456789</th>
                            <th scope="col">1.200.300 VND</th>
                            <th scope="col">Active</th>
                            <th scope="col"><a href="{{ Route('Detail_Account',1) }}">View Detail</a></th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- List Of Account Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        @include('Component.footer')
    </footer>
    <!-- Footer Section End -->

@endsection
