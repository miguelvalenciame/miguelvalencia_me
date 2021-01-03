<?php

/** 
 * Template Name: Contact Page 
 * 
 * 
 * 
 */
get_header();
?>

<section class="contact-page">
    <!-- contact-section STARTS -->

    <!-- container-fluid STARTS -->
    <div class="container-fluid">

        <div class="row p-3 p-md-5" data-aos="fade-up" data-aos-duration="1500">




            <div id="contact-page-content-1" class="col-md-12 col-lg-6">

                <figure id="contact-page-img"><?php the_post_thumbnail(); ?></figure>


            </div>

            <div class="p-4 p-lg-5" id="contact-page-content-2">

                <?php the_content() ?>

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'social',
                    'depth'             => 1,
                    'container'         => 'div',
                    'container_class'   => '',
                    'container_id'      => 'contact-me-social-media-links',
                    'menu_class'        => 'navbar nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>


            </div>


        </div>

    </div>





</section> <!-- contact-section ENDS -->


<?php get_footer(); ?>