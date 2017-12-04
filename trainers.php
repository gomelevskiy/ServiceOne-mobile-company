<?php
/*
Template Name: Шаблон для страницы "Список блоков"
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

    <!-- shop-detail start here -->
    <section class="trainers-block">
        <div class="container">
            <!-- latest-news-home_two  style start here -->
            <div class="latest-news-home_two">

                <div class="row top_gap">
                    <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                        <figure>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/home-4-trainer-1.jpg" alt="trainer"></a>

                        </figure>
                        <div class="classes-content">
                            <h3><a href="#">JOHNATHAN DOE</a></h3>
                            <span>BODY BUILDING TRAINER </span>
                            <a href="#" class="plus-more open-info">+</a>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                        <figure>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/home-4-trainer-3.jpg" alt="trainer"></a>

                        </figure>
                        <div class="classes-content">
                            <h3><a href="#">MICHAEL JOHNSON</a></h3>
                            <span>FITNESS TRAINER</span>
                            <a href="#" class="plus-more open-info">+</a>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                        <figure>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/home-4-trainer-2.jpg" alt="trainer"></a>

                        </figure>
                        <div class="classes-content">
                            <h3><a href="#">Anthony Agee</a></h3>
                            <span>cardio TRAINER</span>
                            <a href="#" class="plus-more open-info">+</a>
                        </div>

                    </div>

                </div>

                <div class="row top_gap">
                    <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                        <figure>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/trainer-pic1.jpg" alt="trainer"></a>

                        </figure>
                        <div class="classes-content">
                            <h3><a href="#">Megan  Fultz</a></h3>
                            <span>strength  TRAINER</span>
                            <a href="#" class="plus-more open-info">+</a>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                        <figure>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/trainer-pic2.jpg" alt="trainer"></a>

                        </figure>
                        <div class="classes-content">
                            <h3><a href="#">Richard Rollins</a></h3>
                            <span>speed &amp; power TRAINER</span>
                            <a href="#" class="plus-more open-info">+</a>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                        <figure>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/trainer-pic3.jpg" alt="trainer"></a>

                        </figure>
                        <div class="classes-content">
                            <h3><a href="#">Stanley Dziedzic</a></h3>
                            <span>flexibility  TRAINER</span>
                            <a href="#" class="plus-more open-info">+</a>
                        </div>

                    </div>

                </div>

                <div class="row top_gap">
                    <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                        <figure>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/home-4-trainer-1.jpg" alt="trainer"></a>

                        </figure>
                        <div class="classes-content">
                            <h3><a href="#">Wilda Stotts</a></h3>
                            <span>anaerobic capacity TRAINER</span>
                            <a href="#" class="plus-more open-info">+</a>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                        <figure>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/home-4-trainer-2.jpg" alt="trainer"></a>

                        </figure>
                        <div class="classes-content">
                            <h3><a href="#">Morris Tam</a></h3>
                            <span>anthropometry TRAINER</span>
                            <a href="#" class="plus-more open-info">+</a>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                        <figure>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/home-4-trainer-3.jpg" alt="trainer"></a>

                        </figure>
                        <div class="classes-content">
                            <h3><a href="#">Robert Strobel</a></h3>
                            <span>health TRAINER</span>
                            <a href="#" class="plus-more open-info">+</a>
                        </div>

                    </div>

                </div>

            </div>

            <!-- latest-news-home_two  style end here -->
        </div>
    </section>
    <!-- shop-detail end here -->

</div>
<!--Content Area End-->

<?php get_footer(); ?>
