<!doctype html>
<html <?php language_attributes(); ?>>

<head>


    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        <?php wp_title(); ?>
    </title>

    <meta name="description" content="<?php bloginfo('description'); ?>">



    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/xfn5klr.css">

    <!-- Special Styles -->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


    <?php wp_head(); ?>
</head> <!-- head ENDS -->


<body>

    <header class="navbar navbar-expand-lg fixed navbar-light bg-light">

        <div class="container-fluid" data-aos="fade-down" data-aos-duration="1500">



            <a href="<?php echo site_url(); ?>">miguelvalencia.me</a>



            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                aria-expanded="false">
                <span class=" navbar-toggler-icon"></span>
            </button>

            <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav ml-auto mt-2 mt-lg-0',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>

            </nav>



        </div>



    </header>