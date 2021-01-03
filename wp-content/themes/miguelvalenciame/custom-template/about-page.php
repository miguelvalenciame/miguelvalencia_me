<?php

/** 
 * Template Name: About Page 
 * 
 * 
 * 
 */
get_header();
?>

<section class="about-page">
    <!-- about-section STARTS -->

    <!-- container-fluid STARTS -->
    <div class="container-fluid">

        <div class="row p-3 p-md-5" data-aos="fade-up" data-aos-duration="1500">

            <div id="about-page-content-1" class="col-md-12 col-lg-6">

                <figure id="about-page-img"><?php the_post_thumbnail(); ?></figure>

            </div>

            <div class="p-4 p-lg-5" id="about-page-content-2">


                <?php the_content() ?>


            </div>

        </div>

    </div>





</section> <!-- about-section ENDS -->


<?php get_footer(); ?>