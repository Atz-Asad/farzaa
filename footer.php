
    <!-- FOOTER SECTION STARTS HERE -->
    <footer class="fz-footer-section fz-1-footer-section">
        <div class="fz-footer-top">
            <div class="container">
                <div class="row gy-md-5 gy-4 justify-content-center justify-content-lg-between">
                    <div class="col-xxl-4 col-lg-12 col-md-8">
                        <div class="fz-footer-about fz-footer-widget">
                            <div class="fz-logo fz-footer-widget__title">
                                <a href="index.html"><img src="<?php the_field('footer_logo','option');?>" alt="logo"></a>
                            </div>
                            <p class="fz-footer-about__txt">There Are Many Different Styles Of Including Aviator, Wayfarer, Cat-Eye, Round, Some Sunglasses Also Have Polarized Lenses</p>
                            <img src="<?php the_field('payment_method_image','option');?>" alt="Pyament Methods" class="fz-payment-methods">
                        </div>
                    </div>
                    <?php dynamic_sidebar('footer_widgets');?>
                    <!-- <div class="col-xxl-2 col-lg-3 col-md-4 col-6 col-xxs-12">
                        <div class="fz-footer-widget">
                            <h5 class="fz-footer-widget__title">Ways to Shop</h5>
                            <ul>
                                <li><a href="#">Shop on Facebook</a></li>
                                <li><a href="#">Shop on Ebay</a></li>
                                <li><a href="#">Shop by Category</a></li>
                                <li><a href="#">Shop All</a></li>
                                <li><a href="#">Coupons and Discounts</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 col-xxs-12">
                        <div class="fz-footer-widget">
                            <h5 class="fz-footer-widget__title">Customer Service</h5>
                            <ul>
                                <li><a href="#">Shipping and Returns</a></li>
                                <li><a href="#">Product Care</a></li>
                                <li><a href="#">Returns & Policy</a></li>
                                <li><a href="#">Warranty & Lifetime Service</a></li>
                                <li><a href="#">Jewelry Care Instruction</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 col-xxs-12">
                        <div class="fz-footer-widget">
                            <h5 class="fz-footer-widget__title">Quick Links</h5>
                            <ul>
                                <li><a href="#">Our Story</a></li>
                                <li><a href="#">Blog & Press</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 col-xxs-12">
                        <div class="fz-footer__contact-info">
                            <h5 class="fz-footer-widget__title">Store Address</h5>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa-light fa-location-dot"></i> 16 Rr 2, Ketchikan, Alaska 99901, USA</a>
                                </li>
                                <li>
                                    <a href="tel:9072254144"><i class="fa-light fa-phone"></i> (907) 225-4144</a>
                                </li>
                                <li>
                                    <a href="mailto:info@webmail.com"><i class="fa-light fa-envelope-open-text"></i>info@webmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="fz-footer-bottom">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-md-6 col-12">
                        <p class="fz-copyright">
                            &copy;
                            <script>document.write(new Date().getFullYear())</script><?php the_field('footer_copyright_text','option'); ?>
                        </p>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="fz-footer-socials">
                            <ul>
                                <?php

                                if(have_rows('social_profiles','option')):
                                while(have_rows('social_profiles','option')) : the_row();
                                
                                ?>
                                <li><a href="<?php echo the_sub_field('profile_link'); ?>">
                                    <?php echo the_sub_field('profiles_icon'); ?>
                                </a></li>

                                <?php endwhile; endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION STARTS HERE -->

    <?php wp_footer(); ?>
</body>

</html>