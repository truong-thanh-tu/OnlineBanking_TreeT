<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="header__logo">
                <a href="./index.html"><p
                        style="">
                            <span><img  class="logo_header" src="{{ asset('img/logo-icon/Logo.png') }}" alt="Image Logo"></span>Online<span class="logo_letter_banking">Banking</span>
                    </p></a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="header__nav">
                <nav class="header__menu">
                    <ul>
                        <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="{{Route('Home') }}">Home</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'about') ? 'active' : '' }}"><a
                                href="{{Route('About') }}">About</a></li>
                        <li class="{{ (request()->segment(1) == 'services') ? 'active' : '' }}"><a
                                href="{{Route('Services') }}">Services</a></li>
                        <li class="{{ (request()->segment(1) == 'blog') ? 'active' : '' }}"><a
                                href="{{Route('Blog') }}">Blog</a></li>
                        <li class="{{ (request()->segment(1) == 'contact') ? 'active' : '' }}"><a
                                href="{{Route('Contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="canvas__open">
        <span class="fa fa-bars"></span>
    </div>
</div>
