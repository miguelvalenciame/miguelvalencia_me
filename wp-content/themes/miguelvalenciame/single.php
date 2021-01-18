<?php

/**
 * The template for displaying single posts
 *
 */

get_header(); ?>



<section id="single-page">

    <div class="container-fluid">

        <div class="row p-2 pt-3 p-lg-5 ">

            <center>

                <div class="col-md-10 col-lg-6">


                    <?php while (have_posts()) : the_post(); ?>

                    <h1><?php the_title(); ?></h1>

                    <figure id="img-post"><?php the_post_thumbnail(); ?></figure>


                    <?php get_template_part('content', get_post_format()); ?>

                    <?php endwhile; ?>


                </div>

            </center>

        </div>

    </div>

</section>

<!-- contact-section ENDS -->

<?php get_footer(); ?>