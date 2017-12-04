<?php get_header(); ?>

    <!--Content Area Start-->
    <div id="content">
        <!-- slider-hero start here -->
        <section class="slider-hero inner-banner_info" style="background-image: url(<?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('background-rubric', $taxonomy . '_' .$term_id); ?>)">
            <div class="container">
                <h1><?php single_term_title();?></h1>
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
                        <?php $i = 0; ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                                <figure>
                                    <?php the_post_thumbnail(); ?>
                                    <span><?php the_field('price-txt'); ?></span>

                                </figure>
                                <div class="classes-content">
                                    <h3><?php the_title(); ?></h3>
                                    <span><?php get_cat_name( $id ) ?></span>
                                </div>
                                <div class="sbox__content"><?php the_content(); ?></div>
                                <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                            </div>
                        <?php $i++; endwhile; ?>
                    </div>

                </div>

                <!-- latest-news-home_two  style end here -->
            </div>
        </section>
        <!-- shop-detail end here -->

    </div>
    <!--Content Area End-->

<?php get_footer(); ?>