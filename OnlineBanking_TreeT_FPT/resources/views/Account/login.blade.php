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
                        <h2>Login</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Login Section Begin -->
    <div class="login">
        <div class="container">
            <div class="main">
                <form action="{{ Route('List_Account') }}">
                    <div class="logo">
                        <img src="{{ asset('img/Logo-icon/logo-icon.png') }}" alt="">
                    </div>
                    <div class="form-group user">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
                    </div>
                    <div class="form-group pass">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" required="required">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <div class="submit_login">
                        <input type="submit" class="btn " value="Login">
                    </div>
                    <p class="message">Not registered? <a href="{{ Route('Register') }}">Create an account</a></p>
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
