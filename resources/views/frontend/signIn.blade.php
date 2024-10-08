@extends('frontend.master')


@section('frontend')

<!--Page Title-->
<section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{asset('frontend')}}/images/shape/shape-9.png);"></div>
        <div class="pattern-2" style="background-image: url({{asset('frontend')}}/images/shape/shape-10.png);"></div>
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


<!-- ragister-section -->
<section class="ragister-section centred sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                <div class="sec-title">


                </div>


                <div class="tabs-content">


                    <div class="inner-box">
                        <h4 class="text-center">Sign in</h4>

                        <form method="POST" action="{{ route('login') }}" class="default-form">
                            @csrf

                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" required="">
                            </div>
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn btn-one">Sign in</button>
                            </div>
                        </form>
                        <div class="othre-text">
                            <p>Have not any account? <a href="{{route('signUp')}}">Register Now</a></p>
                        </div>
                        <div class="othre-text">
                            <p>Have not any account? <a href="{{ route('password.request') }}">Forget Password</a></p>
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
    <div class="pattern-layer" style="background-image: url({{asset('frontend')}}/images/shape/shape-2.png);"></div>
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
@endsection