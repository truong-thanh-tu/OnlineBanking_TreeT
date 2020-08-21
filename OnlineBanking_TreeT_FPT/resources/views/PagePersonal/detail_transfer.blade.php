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
                        <h2>Transaction History</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Transaction History</a>
                            <span>Detail Transaction</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Detail Transfer Section Begin -->
    <div class="detailTransfers">
        <div class="main">
            <div class="container">
                <div class="title">
                    <h5 style=" font-family: 'Lato', sans-serif !important;font-weight: 700; color: #323232;  line-height: 46px; font-size: 36px;margin-bottom: 30px; margin-top: 30px;">Transaction Details: <span>T1909M</span></h5>
                </div>
                <div class="content" style="height: 550px;background-color: white;box-shadow: 2px 3px 6px #b3b7bb;padding: 20px">
                    <table class="table">
                        <tr>
                            <th style=" border: none">Information transfer</th>
                        </tr>
                        <tr>
                            <td style=" border: none">Source Account</td>
                            <td style=" border: none">12346569</td>
                        </tr>
                        <tr>
                            <td style=" border: none">Surplus</td>
                            <td style=" border: none">1.200.000 VND</td>
                        </tr>
                        <tr>
                            <th style=" border: none">Information beneficiary</th>
                        </tr>
                        <tr>
                            <td style=" border: none">Beneficiary Name</td>
                            <td style=" border: none">Nguyen Van B</td>
                        </tr>
                        <tr>
                            <td style=" border: none">Account</td>
                            <td style=" border: none">123456789</td>
                        </tr>
                        <tr>
                            <th style=" border: none">Information Transfer</th>
                        </tr>
                        <tr>
                            <td style=" border: none">Amount of Translation</td>
                            <td style=" border: none">500.000 VND</td>
                        </tr>
                        <tr>
                            <td style=" border: none">Bank name</td>
                            <td style=" border: none">OnlineBanking</td>
                        </tr>
                        <tr>
                            <td style=" border: none">Content</td>
                            <td style=" border: none">First Transfer</td>
                        </tr>
                        <tr>
                            <td style=" border: none">Transaction Fee</td>
                            <td style=" border: none">15.000 VND</td>
                        </tr>
                    </table>
                </div>
                <div class="back">
                    <a class="btn" href="{{ Route('History') }}" role="button" style=" margin-top: 20px;letter-spacing: 1px; border-radius: 2px;background: #88C417;display: inline-block; font-size: 15px; padding: 14px 40px 12px;  color: #ffffff;text-transform: uppercase; font-weight: 700; ">BACK</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Transfer Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        @include('Component.footer')
    </footer>
    <!-- Footer Section End -->

@endsection
