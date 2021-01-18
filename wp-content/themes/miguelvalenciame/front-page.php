<?php get_header(); ?>

<!-- about-section STARTS -->

<section class="front-page">

    <div class="container-fluid" data-aos="fade-up" data-aos-duration="1500">

        <div class="row p-3 p-md-5">

            <div class="col-md-12">

                <center>

                    <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                    <figure><?php the_post_thumbnail($size, ["class" => " img-fluid ", "alt" => "hero-img"]); ?>
                    </figure>

                    <h1><?php bloginfo('description'); ?></h1>

                    <h2><?php the_content(); ?></h2>

                    <a class="btn btn-primary btn-lg" href="<?php echo get_site_url(); ?>/get-a-quote">Get a Quote</a>

                    <?php endwhile; ?>

                    <?php endif; ?>

                </center>

            </div>

        </div>

    </div>



</section>



<section class="recent-post">

    <div class="container-fluid" data-aos="fade-up" data-aos-duration="1500">

        <div class="row p-3 p-md-5">

            <div class="col-md-12">

                <center>

                    <div id="top-line" class="row pt-3 p-md-5">



                        <?php query_posts('posts_per_page=1&post_type=post'); ?>

                        <?php while (have_posts()) : the_post(); ?>

                        <div class="col-md-12 col-lg-6 text-left">

                            <h3>Freelance Journal</h3>

                            <h4>Most Recent Post</h4>

                            <h5><?php the_title(); ?></h5>

                            <p><?php the_excerpt(); ?></p>

                            <a class="btn btn-secondary" href="<?php the_permalink(); ?>">Read More &rsaquo;</a>

                        </div>



                        <?php endwhile; ?>

                        <?php wp_reset_query(); ?>



                    </div>

                </center>


            </div>

        </div>

    </div>


</section>

<?php get_footer(); ?>