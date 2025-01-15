<div>
    <div>
        <div class="tp-slider-area p-relative">
            <div class="tp-slider-active slider-arrow-style">
                <div class="tp-slider-item slider-height">
                    <div class="slider-bg d-flex justify-content-center align-items-center"
                        data-background="assets/img/slider/slider-bg.jpg">
                        <div class="tp-slider-content-box text-center z-index-3">
                            <h2 class="tp-slider-title">
                                aku that protect <br />
                                your family
                            </h2>
                            <p>
                                Only our company gives you aninvestment with your life
                                insurance <br />
                                policy at no extracost.
                            </p>
                            <div class="d-flex align-items-center justify-center">
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
                                <a class="tp-btn-yellow tp-hover-white" href="contact.html">Contact us today</a>
                               </div>
                        </div>
                    </div>
                </div>
                <div class="tp-slider-item slider-height">
                    <div class="slider-bg d-flex justify-content-center align-items-center"
                        data-background="assets/img/slider/slider-bg-2.jpg">
                        <div class="tp-slider-content-box text-center z-index-3">
                            <h2 class="tp-slider-title">
                                Insurance that protect <br />
                                your family
                            </h2>
                            <p>
                                Only our company gives you aninvestment with your life
                                insurance <br />
                                policy at no extracost.
                            </p>
                            <div class="d-flex align-items-center justify-center">
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
                                <a class="tp-btn-yellow tp-hover-white" href="contact.html">Contact us today</a>
                               </div>
                        </div>
                    </div>
                </div>
                <div class="tp-slider-item slider-height">
                    <div class="slider-bg d-flex justify-content-center align-items-center"
                        data-background="assets/img/slider/slider-bg-3.jpg">
                        <div class="tp-slider-content-box text-center z-index-3">
                            <h2 class="tp-slider-title">
                                Insurance that protect <br />
                                your family
                            </h2>
                            <p>
                                Only our company gives you aninvestment with your life
                                insurance <br />
                                policy at no extracost.
                            </p>
                           <div class="d-flex align-items-center justify-center">
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
                            <a class="tp-btn-yellow tp-hover-white" href="contact.html">Contact us today</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-slider-bottom-shape">
                <img src="assets/img/slider/slider-shape-1.png" alt="" />
            </div>
        </div>
    </div>

</div>
