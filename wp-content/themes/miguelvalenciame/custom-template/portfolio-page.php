<?php

/** 
 * Template Name: Portfolio Page 
 * 
 * 
 * 
 */
get_header();
?>

<section id="portfolio-section">
    <!-- portfolio-item-section STARTS -->

    <div>
        <!-- container-fluid STARTS -->
        <div class="container-fluid">
            <div class="row">



                <div class="col-sm-12 col-md-6 col-lg-4 m-0 p-0" data-aos="fade-up" data-aos-duration="1500">
                    <a id="portfolio-item" href="https://www.myrgvstaffing.com/" class="m-0 img-fluid"
                        style="background-image: url(<?php bloginfo('template_url'); ?>/img/img-rgvstaffing.png);"
                        target="_blank">
                        <h3 class="p-3" id="portfolio-item-text">Customized Job Seeker Website<br> <br> Bootstrap and
                            PHP System
                        </h3>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4  m-0 p-0" data-aos="fade-up" data-aos-duration="1500">
                    <a id="portfolio-item" href="https://www.jolerlume.com/" class="m-0 img-fluid"
                        style="background-image: url(<?php bloginfo('template_url'); ?>/img/img-joler-lume.png);"
                        target="_blank">
                        <h3 class="p-3" id="portfolio-item-text">Landing Page <br> <br> Bootstrap Template with
                            Customized CMS</h3>
                    </a>
                </div>
            </div>
        </div>
    </div> <!-- container-fluid ENDS -->

</section> <!-- portfolio-item-section ENDS -->


<?php get_footer(); ?>