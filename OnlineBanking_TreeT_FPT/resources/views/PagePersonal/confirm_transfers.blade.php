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

    <!--  External Transfers Section Begin -->
    <div class="externalTransfers">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tillet">
                            <h4>Confirm Transfer</h4>
                        </div>
                    </div>
                </div>
                <form action="{{ Route('Success') }}">
                    <div class="container">
                        <div class="row">
                            <div class="formAccount">
                                <table class="table">
                                    <tr>
                                        <th>Code Transfers:</th>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>Code OTP:</th>
                                        <td><input type="text" name="" id=""></td>
                                    </tr>

                                </table>
                                <div class=" text-center">
                                    <p style="color: red;font-size: 12px;font-family: 'Lato', sans-serif;">Lưu ý: Mã OTP
                                        được gửi từ OnlineBanking đến gmail</p>

                                </div>
                            </div>
                        </div>
                        <div class=" text-center mb-5">
                            <button type="submit" class="btn submit m-2">Submit</button>
                            <button type="button" class="btn  cancel">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- External Transfers Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        @include('Component.footer')
    </footer>
    <!-- Footer Section End -->

@endsection
