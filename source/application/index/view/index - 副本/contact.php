        {{include file="layouts/_template/head" /}}
        {{include file="layouts/_template/nav" /}}

        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="{{$base_url}}{{:url('index/index/index')}}">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Contact Info Area -->
        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>

                            <h3>Email Here</h3>
                            <p><a href="mailto:hello@movex.com">hello@movex.com</a></p>
                            <p><a href="mailto:support@movex.com">support@movex.com</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-pin"></i>
                            </div>

                            <h3>Location Here</h3>
                            <p><a href="https://www.google.com/maps/@24.9045273,91.8523559,15z" target="_blank">2750 Quadra Street Victoria Road, New York, Canada</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>

                            <h3>Call Here</h3>
                            <p><a href="">+123 456 7890</a></p>
                            <p><a href="">+241 452 4526</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Info Area -->
        
        <!-- Start Contact Area -->
        <section class="contact-area pb-100">
            <div class="container">
                <div class="section-title">
                    <span>Get in Touch</span>
                    <h3>Ready to Get Started?</h3>
                    <div class="bar"></div>
                </div>

                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First Name*</label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last Name*</label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Your Email*</label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Your Phone*</label>
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Subject*</label>
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message*</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>

                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
{{include file="layouts/_template/footer" /}}