<?php include('parts/head.php'); ?>
<?php include('parts/header.php');?>
<!--Form Back Drop-->
<div class="form-back-drop"></div>

<!-- Hidden Bar -->
<?php include('parts/hiddenBar.php')?>
<!--End Hidden Bar -->

<!-- Bnner Section -->
<?php include('parts/Home/banner.php');?>
<!-- End Bnner Section -->

    <!--End Page Title-->

    <!-- Location Section Two -->

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
