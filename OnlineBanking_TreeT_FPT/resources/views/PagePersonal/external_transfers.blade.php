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
                            <span> External Transfers</span>
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
                            <h4>External Transfers</h4>
                        </div>
                    </div>
                </div>
                <form action="{{ Route('Confirm_Information') }}">
                    <div class="container">
                        <div class="row">
                            <div class="formAccount">
                                <div class="tillet">
                                    <h5>From account: </h5>
                                </div>
                                <table class="table">
                                    <tr>
                                        <th>Source Account:</th>
                                        <td><input type="text" name="sourceaccount"></td>
                                    </tr>
                                    <tr>
                                        <th>Account Name:</th>
                                        <td> Current Account</td>
                                    </tr>
                                    <tr>
                                        <th>Current Balance:</th>
                                        <td>522,695 VND </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="toAccount">
                                <div class="tillet">
                                    <h5>To account: </h5>
                                </div>
                                <table class="table">
                                    <tr>
                                        <th>Choose beneficiary:</th>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>Beneficiary Name:</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Save new benificiary:</th>
                                        <td><input type="checkbox"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="paymentDetails">
                                <div class="tillet">
                                    <h5>Payment details: </h5>
                                </div>
                                <table class="table">
                                    <tr>
                                        <th>Transfer Amount:</th>
                                        <td><input type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>Transfer Date:</th>
                                        <td>20/08/2020</td>
                                    </tr>
                                    <tr>
                                        <th>Transfer Details:</th>
                                        <td><textarea placeholder="Type message.." name="msg" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Fee paid by sender:</th>
                                        <td>Yes</td>
                                    </tr>
                                </table>
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
