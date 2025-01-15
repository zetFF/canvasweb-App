<div>
    <div>
        <header>
            <div id="header-sticky" class="tp-header-area header-transparent header-space header-border">
                <div class="container-fluid">
                    <div class="row g-0 align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="tp-logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-7 col-lg-8 d-none d-lg-block">
                            <div class="tp-main-menu">
                                {{-- Navbar --}}
                                <x-navbar />
                                {{-- Navbar End --}}
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-3 col-lg-2 col-md-6 col-6">
                            <div class="tp-header-right d-flex align-items-center justify-content-end">
                                <div class="tp-header-info d-none d-xxl-block">
                                    <a class="header-icon" href="#"><img src="assets/img/svg/header-icon.svg"
                                            alt="" /></a>
                                    <a href="tel:0091590088">Call us : <span>+00 91 590 088 </span></a>
                                </div>
                                <div class="tp-header-button d-none d-md-block">
                                    <li>
                                        @if (Route::has('login'))
                                        <nav class="d-flex gap-3 align-items-center">
                                            @auth
                                                <a class="tp-btn" href="{{ url('/dashboard') }}">
                                                    Dashboard
                                                </a>
                                            @else
                                                <a class="text-white" href="{{ route('login') }}">
                                                    Log in
                                                </a>

                                                @if (Route::has('register'))
                                                    <a class="tp-btn" href="{{ route('register') }}">
                                                        Register
                                                    </a>
                                                @endif
                                            @endauth
                                        </nav>
                                    @endif
                                    </li>
                                </div>
                                <div class="tp-toggle-bar d-lg-none">
                                    <a class="tp-menu-bar" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tp-offcanvas-area d-lg-none">
                <div class="tpoffcanvas" data-background="assets/img/slider/slider-shape-3-1.png">
                    <div class="tpoffcanvas__close-btn">
                        <button class="close-btn"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="tpoffcanvas__logo">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="tpoffcanvas-social">
                        <div class="tpcanvas-wrapper">
                            <div class="mobile-menu"></div>
                            <div class="tpoffcanvas__content">
                                <span>Ready to work with us?</span>
                                <a href="mailto:Edeningmail@gmail.com">thedeveloperr24@gmail.com</a>
                                <p class="d-none d-lg-block">
                                    Eidan theme comes with everything you need to create the
                                    perfect website for all your business endeavors.
                                </p>
                            </div>
                        </div>
                        <div class="tpoffcanvas__social">
                            <h4 class="offcan-social-title">Follow Us</h4>
                            <div class="social-icon">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="body-overlay"></div>
        </header>
    </div>

</div>
