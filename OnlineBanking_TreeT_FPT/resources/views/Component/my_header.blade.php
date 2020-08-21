<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="header__logo">
                <a href="{{ Route('Home') }}">
                    <p>
                        <span>
                            <img class="logo_header" src="{{ asset('img/logo-icon/Logo.png') }}" alt="Image Logo">
                        </span>Online
                        <span class="logo_letter_banking">Banking</span>
                    </p>
                </a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="header__nav">
                <nav class="header__menu">
                    <ul>
                        <li class="{{ (request()->segment(2) == 'account') ? 'active' : '' }}"><a
                                href="{{Route('List_Account') }}">Account</a>
                        </li>
                        <li class="{{ (request()->segment(2) == 'transfers') ? 'active' : '' }}"><a
                                href="{{Route('Transfers') }}">Transfers</a>
                            <ul class="dropdown bg-light shadow">
                                <li>
                                    <a href="{{ Route('Internal_Transfer') }}" class="text-dark font-weight-bold">Internal Transfers</a>
                                </li>
                                <li>
                                    <a href="{{ Route('External_Transfer') }}" class="text-dark font-weight-bold">External
                                        Transfers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ (request()->segment(2) == 'history') ? 'active' : '' }}"><a
                                href="{{Route('History') }}">Transaction History</a>
                        </li>
                        <li class="{{ (request()->segment(2) == 'report') ? 'active' : '' }}"><a
                                href="{{Route('Blog') }}">Overview Report</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="canvas__open">
        <span class="fa fa-bars"></span>
    </div>
</div>
