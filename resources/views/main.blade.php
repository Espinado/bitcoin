@extends('layouts.main')

@section('content')
<section id="about_us">
    <div class="container">
        <h2>About Us</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="about_us_tab">
                    <h4>
                        Who we are
                    </h4>
                    <div class="content">
                        who_are_we
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="about_us_tab">
                    <h4>
                        What we do
                    </h4>
                    <div class="content">
                        what_we_do
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="about_us_tab">
                    <h4>
                        Why we do it
                    </h4>
                    <div class="content">
                        why_we_do_it
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="why_us">
    <div class="container h-100">
        <h2>Why to trade with us</h2>
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="reason_wrapp">
                    <div class="reason_num">
                        1
                    </div>
                    <div class="reason_text">
                        1_reason
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="reason_wrapp">
                    <div class="reason_num">
                        2
                    </div>
                    <div class="reason_text">
                        2_reason
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="reason_wrapp">
                    <div class="reason_num">
                        3
                    </div>
                    <div class="reason_text">
                        3_reason
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="reason_wrapp">
                    <div class="reason_num">
                        4
                    </div>
                    <div class="reason_text">
                        4_reason
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="reason_wrapp">
                    <div class="reason_num">
                        5
                    </div>
                    <div class="reason_text">
                        5_reason
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="reason_wrapp">
                    <div class="reason_num">
                        6
                    </div>
                    <div class="reason_text">
                        6_reason
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="how_works">
    <div class="container h-100">
        <h2>How it works</h2>
        <div class="row h-100 justify-content-center justify-content-md-between align-items-center">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="step_wrapp">
                    <img class="step_image first" src="{{ asset('images/1_step.png') }}" alt="step image">
                    <div class="step_text">
                        first_step
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="step_wrapp">
                    <img class="step_image second" src="{{ asset('images/2_step.png') }}" alt="step image">
                    <div class="step_text">
                        second_step
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="step_wrapp">
                    <img class="step_image third" src="{{ asset('images/3_step.png') }}" alt="step image">
                    <div class="step_text">
                        third_step
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact_us">
    <div class="container">
        <h2>Contact us</h2>
        <div class="row">
            <div class="col-12">
                <div class="mail_wrapp">
                    <form action="" method="post" class="contact_form" novalidate="novalidate" data-status="init">
                        <label>Your name
                            <span class="control_wrapp your-name">
                                <input type="text" name="your-name" value="" size="40" aria-required="true"
                                    aria-invalid="false">
                            </span>
                        </label>
                        <label>Your email
                            <span class="control_wrapp your-email">
                                <input type="email" name="your-email" value="" size="40" aria-required="true"
                                    aria-invalid="false">
                            </span>
                        </label>
                        <label> Your message
                            <span class="control_wrapp your-message">
                                <textarea name="your-message" cols="40" rows="10" aria-required="true"
                                    aria-invalid="false"></textarea>
                            </span>
                        </label>
                        <input type="submit" value="Start earning" class="form-submit btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
