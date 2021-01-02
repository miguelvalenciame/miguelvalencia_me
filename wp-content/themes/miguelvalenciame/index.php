<?php get_header(); ?>

<section id="blog-page">

    <div style="min-height: 400px;">

        <div class="container-fluid p-0">

            <div class="row m-0">

                <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content-blog', get_post_format()); ?>

                <?php endwhile; ?>

            </div>

        </div>

    </div>

</section>

<?php get_footer(); ?>