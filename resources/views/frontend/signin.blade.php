<x-front-layout>
    <!--Page Title-->
    <section class="page-title-two bg-color-1 centred">
        <div class="pattern-layer">
            <div class="pattern-1"
                style="background-image: url({{ asset('assets/frontend/images/shape/shape-9.png') }});"></div>
            <div class="pattern-2"
                style="background-image: url({{ asset('assets/frontend/images/shape/shape-10.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Sign In</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Sign In</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- register-section -->
    <section class="ragister-section centred sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                    <div class="sec-title">

                    </div>
                    <div class="tabs-box">
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons centred clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-1">Login</li>
                                <li class="tab-btn" data-tab="#tab-2">Register</li>
                            </ul>
                        </div>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <h4>Sign in</h4>
                                    <form method="POST" action="{{ route('login') }}" class="default-form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" id="password"
                                                :value="old('username')">
                                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password"
                                                :value="old('password')">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Sign in</button>
                                        </div>
                                    </form>
                                    <div class="othre-text">
                                        <p>Have not any account? <a href="signup.html">Register Now</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="inner-box">
                                    <h4>Register</h4>
                                    <form action="{{ route('register') }}" method="post" class="default-form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" required=""
                                                :value="old('name')">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" id="username" required=""
                                                :value="old('username')">
                                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="email" id="email" required=""
                                                :value="old('email')">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" required=""
                                                :value="old('password')">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" name="password_confirmation"
                                                id="password_confirmation" required=""
                                                :value="old('password_confirmation')">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Sign up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ragister-section end -->

    <!-- subscribe-section -->
    <section class="subscribe-section bg-color-3">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div class="text">
                        <span>Subscribe</span>
                        <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                    <div class="form-inner">
                        <form action="contact.html" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email" required="">
                                <button type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->

</x-front-layout>
