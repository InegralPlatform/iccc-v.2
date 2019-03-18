<?php include('parts/head.php'); ?>
<?php include('parts/header.php');?>

    <!--End Main Header -->

    <!--Form Back Drop-->
    <div class="form-back-drop"></div>


    <!--End Hidden Bar -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/1.jpg);">
        <div class="auto-container">
            <span class="float-text">Contact</span>
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home </a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Location Section Two -->
    <section class="location-section-two style-three">
        <div class="auto-container">
            <div class="row">
                <!-- Info Block -->
                <div class="info-block col-lg-4 col-md-6 col-sm-12 wow slideInLeft">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/vactor-1.png" alt=""></figure>
                        </div>
                        <div class="info-box">
                            <h5>Conference Location</h5>
                            <div class="text">Washington State Convention Center 705 Pike Street ,Seattle, WA 98101 Phone: 206-694-5000</div>
                        </div>
                    </div>
                </div>

                <!-- Info Block -->
                <div class="info-block col-lg-4 col-md-6 col-sm-12 wow slideInDown">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/vactor-2.png" alt=""></figure>
                        </div>
                        <div class="info-box">
                            <h5>Hotel Information</h5>
                            <div class="text">Washington State Convention Center 705 Pike Street ,Seattle, WA 98101 Phone: 206-694-5000</div>
                        </div>
                    </div>
                </div>

                <!-- Info Block -->
                <div class="info-block col-lg-4 col-md-6 col-sm-12 wow slideInRight">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/vactor-3.png" alt=""></figure>
                        </div>
                        <div class="info-box">
                            <h5>Airport Information</h5>
                            <div class="text">Washington State Convention Center 705 Pike Street ,Seattle, WA 98101 Phone: 206-694-5000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-box">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>

    </section>
    <!--End Location Section -->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="anim-icons">
            <span class="icon icon-cross-1"></span>
            <span class="icon icon-circle-12"></span>
            <span class="icon icon-circle-9"></span>
            <span class="icon icon-twist-line-3"></span>
        </div>
        <div class="auto-container">
             <div class="contact-form">
                <form method="post" action="sendemail.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12 form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" placeholder="Sohel Nazmul" required="">
                        </div>

                        <div class="col-md-6 col-sm-12 form-group">
                            <label>Your e-mail</label>
                            <input type="email" name="email" placeholder="@gmail.com" required="">
                        </div>

                        <div class="col-md-12 col-sm-12 form-group">
                            <label>Message</label>
                            <textarea name="message" placeholder="Enter youe meaases here"></textarea>
                        </div>

                        <div class="col-md-6 col-sm-12 order-12 form-group text-right">
                            <button class="theme-btn btn-style-five" type="submit" name="Submit">Send Message</button>
                        </div>

                        <div class="col-md-6 col-sm-12 form-group">
                            <label class="radio-option">Send me a copy
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

    <!-- Main Footer -->
<?php include('parts/footer.php');?>
<?php include('parts/foot.php');?>
