@extends('layouts.master')

@section('header-title', 'Register')

@section('main')
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h3>Welcome ! <br> <br>
                            Please Register now</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--================login_part Area =================-->
    <section class="login_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <label for="male" class="text-capitalize mr-1">Male</label>
                                    <input type="text" class="form-control" id="name" name="name" value=""
                                        placeholder="Fullname">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="male" class="text-capitalize mr-1">Male</label>
                                    <input type="text" class="form-control" id="email" name="email" value=""
                                        placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="male" class="text-capitalize mr-1">Male</label>
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="male" class="text-capitalize mr-1">Male</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value=""
                                        placeholder="Phone number">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="male" class="text-capitalize mr-1">Day of birth</label>
                                    <input type="date" name="birthdate" class="form-control" id="birthdate" value=""
                                    placeholder="Date of birth">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="male" class="text-capitalize mr-1">Male</label>
                                    <input type="text" name="address" class="form-control" id="address" value=""
                                    placeholder="Address">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="male" class="text-capitalize mr-1">Male</label>
                                    <input type="radio" class="mr-1" id="male" name="gender" value="1">
                                    {{-- value="{{ \App\Models\User::MALE }}" --}}
                                    <label for="female" class="text-capitalize mr-1">Female</label>
                                    <input type="radio" id="female" name="gender" value="2">
                                    {{-- value="{{ \App\Models\User::FE_MALE }}" --}}
                                </div>
                                <div class="col-md-12 form-group ">
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Already have an account?</h2>
                            <p>What are you waiting for without buying the best products on our website yet?</p>
                            <a href="{{ route('login') }}" class="btn_3">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
@endsection
