<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
    <meta name="robots" content="index, follow" >
    <meta name="format-detection" content="telephone=no">

    <title><?php '||' . wp_title(); ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,900,800%7CRoboto:400,300,500,700,900%7COswald:400,700,300%7CMontserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/simple-line-icons.css" media="screen">
    <link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/global.css" media="screen">
    <link href="<?php bloginfo('template_directory'); ?>/css/settings.css" type="text/css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('template_directory'); ?>/css/layers.css" type="text/css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css" media="screen">
    <link rel="stylesheet" type="text/less" href="<?php bloginfo('template_directory'); ?>/css/skin.less" media="screen">

    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.min.js"></script>
    <![endif]-->

</head>
<body data-ng-app="websiteApp" data-ng-controller="FormController">
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>

        </div>
    </div>
</div>

<!--Page Wrapper Start-->
<div id="wrapper" class=" homepage-2">
    <!--Header Section Start-->
    <header id="header" class="header-two">
        <div class="container">

            <div class="top-header">
                <div class="row">
                    <div class="col xs-12 col-sm-7 copy-right">
                        <p>
                            ЧАСЫ РАБОТЫ : ПН - ПТ <span><?php the_field('time_from',7); ?></span>, СБ - ВС <span><?php the_field('time_to',7); ?></span>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 pull-right ">

                        <ul class="media-wrap clearfix">
                            <li>
                                <a href="<?php the_field('link_vk',7); ?>" class="vk"><i class="fa fa-vk"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-4 logo-wrap">
                    <a href="/" class="logo"> <img src="<?php bloginfo('template_directory'); ?>/img/home-2_logo.png" alt="logo" /></a>
                    <div class="calling-contact">
                        <span>Позвоните нам</span>
                        <a href="#"><?php the_field('tel_1',7); ?></a>
                    </div>
                    <div class="calling-contact two-contacts">
                        <span></span>
                        <a href="#"><?php the_field('tel_2',7); ?></a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-8 pull-right mobile-static">
                    <nav class="navbar">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <?php wp_nav_menu( array(
                                'theme_location' => 'main',
                                'container' => 'ul',
                                'menu_class'=> 'nav navbar-nav'
                            ) ); ?>

                        </div><!-- /.navbar-collapse -->

                    </nav>
                </div>

            </div>

        </div>

    </header>
    <!--Header Section End-->