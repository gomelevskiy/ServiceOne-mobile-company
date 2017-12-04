<?php
/*
Template Name: Шаблон для страницы "Внутренняя страница"
*/
?>

<?php get_header(); ?>

<!--Content Area Start-->
<div id="content">
    <!-- slider-hero start here -->
    <section class="slider-hero inner-banner_info">
        <div class="container">
            <h1><?php the_title();?></h1>
        </div>
    </section>

    <!-- slider-hero End here -->
    <!-- breadcrum-sec start here -->
    <section class="breadcrum-sec">
        <div class="container">

            <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>

        </div>
    </section>
    <!-- breadcrum-sec end here -->
    <section class="who_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="head-global family-oswald">
                        <h2 class="h2">WHo we are</h2>
                        <p>
                            Founded in 2003 by CEO jhon doe, the Chanhassen, loremm ipusm is dedicated to providing members with more value than any other health club.
                        </p>

                    </div>

                    <div class="who-info">
                        <p>
                            Donec venenatis augue in commodo posuere. Maecenas nibh dolor, dignissim id nunc sed, semper gravida quam. Sed mollis ipsum at ante laoreet, quis rutrum magna mattis. Etiam semper molestie neque sed hendrerit. Suspendisse luctus commodo felis dictum scelerisque.

                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 zoom">
                    <figure class="img-mobile">

                        <img src="<?php bloginfo('template_directory'); ?>/images/about-us-image1.jpg" alt="who we are" />
                    </figure>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 looking-fit ">
                    <div class="head-global family-oswald clearfix">
                        <h2 class="h2">WELCOME TO FIT&amp;FAB GYM<span>YOUR ONE STOP SOLUTION FOR BEING FIT AND LOOKING FAB</span></h2>
                        <a href="#" class="button-btn small-btn green-bg">learn more</a>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut nunc sapien. Pellentesque feugiat risus nec fringilla dolor pellentesque aliquet. Cras eget odio a massa viverra  fringilla dolor pellentesque aliquet. Cras eget.
                    </p>

                </div>
            </div>

            <div class="row top_gap">
                <div class="col-xs-12 col-sm-3 fit_list-block1">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/cardio-icon.png" alt="cardio">
                    </figure>
                    <div class="fit-description1">
                        <h3> BEST CARDIO PROGRAMS </h3>
                        <p>
                            Sed in libero in risus vehicula onc venenatis. Aliquam luctus ante sedies magna convallis malesuada.
                        </p>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-3 fit_list-block1">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/bath-icon.png" alt="cardio">
                    </figure>
                    <div class="fit-description1">
                        <h3> SAUNA BATH AVAILABLE </h3>
                        <p>
                            Sed in libero in risus vehicula onc venenatis. Aliquam luctus ante sedies magna convallis malesuada.
                        </p>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-3  fit_list-block1">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/karate-icon.png" alt="cardio">
                    </figure>
                    <div class="fit-description1">
                        <h3> KARATE CLASSES OPEN</h3>
                        <p>
                            Sed in libero in risus vehicula onc venenatis. Aliquam luctus ante sedies magna convallis malesuada.
                        </p>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-3  fit_list-block1">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/watch-icon.png" alt="cardio">
                    </figure>
                    <div class="fit-description1">
                        <h3>TIME BASE EXERCISE </h3>
                        <p>
                            Sed in libero in risus vehicula onc venenatis. Aliquam luctus ante sedies magna convallis malesuada.
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <!-- success_story_wrap start here -->
    <section class="success_story_wrap1">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="head-global family-oswald ">
                        <h2 class="h2">SECtion with Image on Right side and <span>Text on Left side here</span></h2>

                    </div>

                    <p>
                        In pellentesque faucibus vestibulum. Nulla at nulla justo, eget lucin blandit. Curabitur vulputate, ligula lacinia scelerisque temporaugue sit amet leo consequat. Loosing Great.
                    </p>
                    <ul class="list-global pack-list ">
                        <li>
                            <i class="fa fa-check-circle-o"></i>Feature Points 1 goes here
                        </li>
                        <li>
                            <i class="fa fa-check-circle-o"></i>Some of bulletted Ponts will appear here
                        </li>
                        <li>
                            <i class="fa fa-check-circle-o"></i>Fit and Fab offers 25% discount for Newly Joined Memebers
                        </li>
                        <li>
                            <i class="fa fa-check-circle-o"></i>Cool Place to do your Hard Workouts
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!-- success_story_wrap End here -->

    <!-- about-us-sexy-wrap start here -->
    <section class="about-us-sexy-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 fit_sexy-about">
                    <strong> BEING FIT
                        IS NEW <strong>SEXY</strong></strong>
                    <a href="trainer-detail.html" class="button-btn">JOIN THE FORCE</a>

                </div>
                <div class="col-xs-12 col-sm-8 founded-wrap">
                    <h3> Founded in 2003 by CEO jhon doe, the Chanhassen, loremm ipusm is dedicated to providing members with more value than any other health club. </h3>

                    <p>
                        Donec venenatis augue in commodo posuere. Maecenas nibh dolor, dignissim id nunc sed, semper gravida quam. Sed mollis ipsum at ante laoreet, quis rutrum magna mattis. Etiam semper molestie neque sed hendrerit. Suspendisse luctus commodo felis dictum scelerisque.
                    </p>
                    <div class="row top_gap">
                        <div class="col-xs-12 col-sm-6">
                            <ul class="list-global pack-list ">
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Feature Points 1 goes here
                                </li>
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Some of bulletted Ponts will appear here
                                </li>
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Fit and Fab offers 25% discount
                                </li>
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Cool Place to do your Hard Workouts
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <ul class="list-global pack-list ">
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Feature Points 1 goes here
                                </li>
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Some of bulletted Ponts will appear here
                                </li>
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Fit and Fab offers 25% discount
                                </li>
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Cool Place to do your Hard Workouts
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- about-us-sexy-wrap end here -->
    <!-- award-wrap start here -->
    <section class="award-wrap">
        <div class="container">
            <div class="head-global family-oswald text-center ">
                <h2 class="h2">We are proud to have achieved the following awardS</h2>

            </div>
            <div class="row top_gap">
                <div class="col-xs-12 col-sm-3 award-list">
                    <figure class="rounded-img"><img src="<?php bloginfo('template_directory'); ?>/images/envato-award-1.png" alt="envato" />
                    </figure>
                    <h4>Health Club Awards 2013</h4>
                </div>
                <div class="col-xs-12 col-sm-3 award-list">
                    <figure class="rounded-img"><img src="<?php bloginfo('template_directory'); ?>/images/envato-award-1.png" alt="envato" />
                    </figure>
                    <h4>National Fitness Awards 2012</h4>
                </div>
                <div class="col-xs-12 col-sm-3 award-list">
                    <figure class="rounded-img"><img src="<?php bloginfo('template_directory'); ?>/images/envato-award-1.png" alt="envato" />
                    </figure>
                    <h4>Flame Awards 2013</h4>
                </div>
                <div class="col-xs-12 col-sm-3 award-list">
                    <figure class="rounded-img"><img src="<?php bloginfo('template_directory'); ?>/images/envato-award-1.png" alt="envato" />
                    </figure>
                    <h4>National Fitness Awards 2013</h4>
                </div>

            </div>
        </div>
    </section>
    <!-- award-wrap end here -->
</div>
<!--Content Area End-->

<?php get_footer(); ?>
