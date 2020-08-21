@extends('Layout.master')
@section('main')
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu">
        @include('Component.offcanvas-menu')
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        @include('Component.header')
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="{{ asset('img/breadcrumb/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Register</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Login Section Begin -->
    <div class="Register">
        <div class="container">
            <div class="main">
                <form action="{{ Route('Login') }}">
                    <div class="img_register">
                        <img src="{{ asset('img/Logo-icon/logo-icon.png') }}" alt="">
                    </div>

                    <div class="form-group user">
                        <label for="user">Username</label>
                        <input type="text" class="form-control" id="user" required="required">
                    </div>

                    <div class="form-group number_account">
                        <label for="number_account">Default account number</label>
                        <input type="text" class="form-control" id="number_account" required="required">
                    </div>

                    <div class="form-group email">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required="required">
                    </div>

                    <div class="form-group new_pass">
                        <label for="new_password">New Password </label>
                        <input type="password" class="form-control" id="new_password" required="required">
                    </div>

                    <div class="form-group retype_new_pass">
                        <label for="retype_new_password">Retype New Password</label>
                        <input type="password" class="form-control" id="retype_new_password" required="required">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>

                    <div class="submit_register">
                        <input type="submit" class="btn " value="Register">
                    </div>
                    <p class="message">Already registered? <a href="{{ Route('Login') }}">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Login Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        @include('Component.footer')
    </footer>
    <!-- Footer Section End -->

@endsection
