<?php
/*
Template Name: Шаблон для страницы Контакты
*/
?>

<?php get_header(); ?>

<!--Content Area Start-->
<div id="content">
    <!-- slider-hero start here -->
    <section class="slider-hero inner-banner_info" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
        <div class="container">
            <h1><?php the_title();?></h1>
        </div>
    </section>

    <!-- slider-hero End here -->

    <section class="breadcrum-sec">
        <div class="container">

            <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>

        </div>
    </section>
    <!-- contact-info start here -->
    <section class="contact-info">
        <div class="container">
            <div class="head-global family-oswald">
                <h2 class="h2">Вы всегда можете связаться с нами</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <div class="comment-entry-box">
                        <?php the_field('contact-form'); ?>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-5 contact-img zoom">
                    <figure><img src="<?php the_field('img-in-form'); ?>" alt="contact-img" />
                    </figure>
                </div>

            </div>
        </div>
    </section>
    <!-- contact-info end here -->
    <!-- finding-map-wrap start here -->

    <section class="finding-map-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <div class="head-global family-oswald">
                        <h2 class="h2 h25">Мы на карте</h2>
                    </div>
                    <!-- Map Section -->
                    <div class="map-contact">
                        <div id="custom_map"><?php the_field('map'); ?></div>

                    </div>
                    <!-- Map Section -->
                </div>

                <div class="col-xs-12 col-sm-5">
                    <div class="head-global family-oswald">
                        <h2 class="h2 h25">Наши контакты</h2>
                    </div>

                    <address class="address-contact">
                        <div class="address-info">
                            <strong>Адрес: </strong>
                            <span><?php the_field('address',7); ?></span>
                        </div>
                        <div class="phone-contact">
                            <strong>Телефон: </strong>
                            <div>
                            <div class="phone-contact-point"><a href="#"><?php the_field('tel_1',7); ?></a></div>
                            <div class="phone-contact-point"><a href="#"><?php the_field('tel_2',7); ?></a></div>
                            </div>
                        </div>
                        <div class="email-contact">

                            <strong>Часы работы: </strong>
                            <div class="footer-contacts-block">
                                <div class="point">Понедельник пятница <span><?php the_field('time_from',7); ?></span></div>
                                <div class="point">суббота воскресение <span><?php the_field('time_to',7); ?></span></div>
                            </div>
                        </div>
                    </address>
                </div>

            </div>
        </div>
    </section>
    <!-- finding-map-wrap End here -->

</div>
<!--Content Area End-->

<?php get_footer(); ?>
