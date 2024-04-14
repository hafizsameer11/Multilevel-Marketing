<header>
    <!-- tp-header-area-start -->
    <div id="header-sticky" class="tp-header-area header-pl-pr header-transparent header-border-bottom">
        <div class="container-fluid">
            <div class="row g-0 align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                    <div class="tp-logo tp-logo-border">
                        <a href="index.html">
                            <style>
                                .tp-logo img {
                                    width: 200px !important;
                                }
                            </style>
                            <img width="200px" src="{{ asset('web/assets/img/logo/logo.png') }}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-8 col-6 d-flex justify-content-end">
                    <div class="tp-main-menu d-none d-xl-block">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>

                                <li>
                                    <a href="{{ route('about') }}">About</a>

                                </li>
                                <li>
                                    <a href="{{ route('projects') }}">Our Project</a>

                                </li>
                                <li>
                                    <a href="{{ route('services') }}">Services</a>

                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Blog</a>

                                </li>
                                <li>
                                    <a href="#"
                                        >User</a
                                    >
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{route('login')}}"
                                                >Login</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="{{route('register')}}"
                                                >Sign Up</a
                                            >
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="tp-header-right">
                        <ul>
                            <li class="d-none d-md-inline-block search-wrapper">
                                <a class="tp-search-box" href="javascript:void(0)"><i
                                        class="tp-search-toggle fal fa-search"></i><i
                                        class="search-close far fa-times"></i></a>
                                <div class="tp-search-form p-relative">
                                    <form action="#">
                                        <input type="text" placeholder="Search ..." />
                                        <button type="submit">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </li>
                      
                            <li>
                                <a class="tp-menu-bar" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="tp-offcanvas-area">
    <div class="tpoffcanvas">
        <div class="tpoffcanvas__close-btn">
            <button class="close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="tpoffcanvas__logo pt-50">
            <a href="index.html">
                <img src="{{asset('web/assets/img/logo/logo-white.png')}}" alt="" />
            </a>
        </div>

        <div class="mobile-menu"></div>
        <div class="tpoffcanvas__info">
            <h3 class="offcanva-title">Get In Touch</h3>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                <div class="tpoffcanvas__info-icon">
                    <a href="#"><i class="fal fa-envelope"></i></a>
                </div>
                <div class="tpoffcanvas__info-address">
                    <span>Email</span>
                    <a href="maito:hello@yourmail.com">info@solutionexperts.io</a>
                </div>
            </div>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                <div class="tpoffcanvas__info-icon">
                    <a href="#"><i class="fal fa-phone-alt"></i></a>
                </div>
                <div class="tpoffcanvas__info-address">
                    <span>Phone</span>
                    <a href="tel:(00)45611227890">0303 753 0000</a>
                </div>
            </div>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                <div class="tpoffcanvas__info-icon">
                    <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="tpoffcanvas__info-address">
                    <span>Location</span>
                    <a href="#" target="_blank">Lahore , Islamabad ,  Karachi
                    </a>
                </div>
            </div>
        </div>
        <div class="tpoffcanvas__social">
            <div class="social-icon">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
            </div>
        </div>
    </div>
</div>
