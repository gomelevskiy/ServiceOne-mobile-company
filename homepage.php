<?php
/*
Template Name: Шаблон для Главной страницы
*/
?>

<?php get_header(); ?>

<!--Content Area Start-->
<div id="content">
    <!-- slider-hero start here -->
    <section class="slider-hero">
        <div id="owl-slider-hero" class="owl-carousel">

            <?php if( get_field('s1_img',7) ): ?>
            <div class="item"><img src="<?php the_field('s1_img',7); ?>" alt="<?php the_field('s1_tab',7); ?>">
                <div class="slider-caption">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-7 slider-left">
                            <span><?php the_field('s1_top-text',7); ?></span>
                            <strong><?php the_field('s1_main-text',7); ?></strong>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-5  slider-right">
                            <span><?php the_field('s1_nominal',7); ?><strong><?php the_field('s1_nominal_val',7); ?>р</strong> </span>

                            <a href="<?php the_field('s1_link',7); ?>" class="button-btn">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('s2_img',7) ): ?>
                <div class="item"><img src="<?php the_field('s2_img',7); ?>" alt="<?php the_field('s2_tab',7); ?>">
                    <div class="slider-caption">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-md-7 slider-left">
                                <span><?php the_field('s2_top-text',7); ?></span>
                                <strong><?php the_field('s2_main-text',7); ?></strong>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-5  slider-right">
                                <span><?php the_field('s2_nominal',7); ?><strong><?php the_field('s2_nominal_val',7); ?>р</strong> </span>

                                <a href="<?php the_field('s2_link',7); ?>" class="button-btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( get_field('s3_img',7) ): ?>
                <div class="item"><img src="<?php the_field('s3_img',7); ?>" alt="<?php the_field('s3_tab',7); ?>">
                    <div class="slider-caption">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-md-7 slider-left">
                                <span><?php the_field('s3_top-text',7); ?></span>
                                <strong><?php the_field('s3_main-text',7); ?></strong>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-5  slider-right">
                                <span><?php the_field('s3_nominal',7); ?><strong><?php the_field('s3_nominal_val',7); ?>р</strong> </span>

                                <a href="<?php the_field('s3_link',7); ?>" class="button-btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( get_field('s4_img',7) ): ?>
                <div class="item"><img src="<?php the_field('s4_img',7); ?>" alt="<?php the_field('s4_tab',7); ?>">
                    <div class="slider-caption">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-md-7 slider-left">
                                <span><?php the_field('s4_top-text',7); ?></span>
                                <strong><?php the_field('s4_main-text',7); ?></strong>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-5  slider-right">
                                <span><?php the_field('s4_nominal',7); ?><strong><?php the_field('s4_nominal_val',7); ?>р</strong> </span>

                                <a href="<?php the_field('s4_link',7); ?>" class="button-btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="slider-navigation">
            <ul class="clearfix">

                <?php if( get_field('s1_img',7) ): ?>
                <li class="active">
                    <strong><?php the_field('s1_tab',7); ?></strong>
                </li>
                <?php endif; ?>

                <?php if( get_field('s2_img',7) ): ?>
                    <li>
                        <strong><?php the_field('s2_tab',7); ?></strong>
                    </li>
                <?php endif; ?>

                <?php if( get_field('s3_img',7) ): ?>
                    <li>
                        <strong><?php the_field('s3_tab',7); ?></strong>
                    </li>
                <?php endif; ?>

                <?php if( get_field('s4_img',7) ): ?>
                    <li>
                        <strong><?php the_field('s4_tab',7); ?></strong>
                    </li>
                <?php endif; ?>

            </ul>

        </div>

    </section>

    <!-- slider-hero End here -->
    <!-- populer-classes start here -->
    <section class="populer-classes">
        <div class="container">
            <div class="head-global family-oswald">
                <h2 class="h2">Часто ломаются</h2>
            </div>

            <div class="row">
                <div class="col-xs-12 tabing-wrap">
                    <div>

                        <div class="clearfix">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs " role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">iPhone</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> iPad </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"> Телефоны </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">  Ноутбуки </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab"> Планшеты </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab"> Навигаторы </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                <div class="row">
                                    <?php $i = 0; $id=11;
                                    $arg_posts =  array(
                                        'orderby'      => 'modified',
                                        'order'        => 'ASC',
                                        'cat' => $id,
                                        'showposts'=>$n
                                    );
                                    $recent = new WP_Query($arg_posts);

                                    while($recent->have_posts()) : $recent->the_post(); ?>
                                        <?php if( get_field('crash-true') ): ?>
                                            <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                    <span><?php the_field('price-txt'); ?></span>

                                                </figure>
                                                <div class="classes-content">
                                                    <h3><?php the_title(); ?></h3>
                                                    <span><?php get_cat_name( $id ) ?></span>
                                                </div>
                                                <div class="section-tabs__content"><?php the_content(); ?></div>
                                                <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                                            </div>
                                        <?php endif; ?>
                                    <?php $i++; endwhile; ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="tab2">
                                <div class="row">
                                    <?php $i = 0; $id=12;
                                    $arg_posts =  array(
                                        'orderby'      => 'modified',
                                        'order'        => 'ASC',
                                        'cat' => $id,
                                        'showposts'=>$n
                                    );
                                    $recent = new WP_Query($arg_posts);

                                    while($recent->have_posts()) : $recent->the_post(); ?>
                                        <?php if( get_field('crash-true') ): ?>
                                            <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                    <span><?php the_field('price-txt'); ?></span>

                                                </figure>
                                                <div class="classes-content">
                                                    <h3><?php the_title(); ?></h3>
                                                    <span><?php get_cat_name( $id ) ?></span>
                                                </div>
                                                <div class="section-tabs__content"><?php the_content(); ?></div>
                                                <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                                            </div>
                                        <?php endif; ?>
                                        <?php $i++; endwhile; ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="tab3">
                                <div class="row">
                                    <?php $i = 0; $id=4;
                                    $arg_posts =  array(
                                        'orderby'      => 'modified',
                                        'order'        => 'ASC',
                                        'cat' => $id,
                                        'showposts'=>$n
                                    );
                                    $recent = new WP_Query($arg_posts);

                                    while($recent->have_posts()) : $recent->the_post(); ?>
                                        <?php if( get_field('crash-true') ): ?>
                                            <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                    <span><?php the_field('price-txt'); ?></span>

                                                </figure>
                                                <div class="classes-content">
                                                    <h3><?php the_title(); ?></h3>
                                                    <span><?php get_cat_name( $id ) ?></span>
                                                </div>
                                                <div class="section-tabs__content"><?php the_content(); ?></div>
                                                <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                                            </div>
                                        <?php endif; ?>
                                        <?php $i++; endwhile; ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="tab4">
                                <div class="row">
                                    <?php $i = 0; $id=5;
                                    $arg_posts =  array(
                                        'orderby'      => 'modified',
                                        'order'        => 'ASC',
                                        'cat' => $id,
                                        'showposts'=>$n
                                    );
                                    $recent = new WP_Query($arg_posts);

                                    while($recent->have_posts()) : $recent->the_post(); ?>
                                        <?php if( get_field('crash-true') ): ?>
                                            <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                    <span><?php the_field('price-txt'); ?></span>

                                                </figure>
                                                <div class="classes-content">
                                                    <h3><?php the_title(); ?></h3>
                                                    <span><?php get_cat_name( $id ) ?></span>
                                                </div>
                                                <div class="section-tabs__content"><?php the_content(); ?></div>
                                                <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                                            </div>
                                        <?php endif; ?>
                                        <?php $i++; endwhile; ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="tab5">
                                <div class="row">
                                    <?php $i = 0; $id=6;
                                    $arg_posts =  array(
                                        'orderby'      => 'modified',
                                        'order'        => 'ASC',
                                        'cat' => $id,
                                        'showposts'=>$n
                                    );
                                    $recent = new WP_Query($arg_posts);

                                    while($recent->have_posts()) : $recent->the_post(); ?>
                                        <?php if( get_field('crash-true') ): ?>
                                            <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                    <span><?php the_field('price-txt'); ?></span>

                                                </figure>
                                                <div class="classes-content">
                                                    <h3><?php the_title(); ?></h3>
                                                    <span><?php get_cat_name( $id ) ?></span>
                                                </div>
                                                <div class="section-tabs__content"><?php the_content(); ?></div>
                                                <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                                            </div>
                                        <?php endif; ?>
                                        <?php $i++; endwhile; ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="tab6">
                                <div class="row">
                                    <?php $i = 0; $id=7;
                                    $arg_posts =  array(
                                        'orderby'      => 'modified',
                                        'order'        => 'ASC',
                                        'cat' => $id,
                                        'showposts'=>$n
                                    );
                                    $recent = new WP_Query($arg_posts);

                                    while($recent->have_posts()) : $recent->the_post(); ?>
                                        <?php if( get_field('crash-true') ): ?>
                                            <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                    <span><?php the_field('price-txt'); ?></span>

                                                </figure>
                                                <div class="classes-content">
                                                    <h3><?php the_title(); ?></h3>
                                                    <span><?php get_cat_name( $id ) ?></span>
                                                </div>
                                                <div class="section-tabs__content"><?php the_content(); ?></div>
                                                <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                                            </div>
                                        <?php endif; ?>
                                        <?php $i++; endwhile; ?>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- populer-classes End here -->
    <section class="schedule-section ">

        <div class="schedule-info">
            <h2><span>Ремонт</span> ноутбуков</h2>
            <p><?php $category_id = 5; echo category_description( $category_id ); ?></p>
        </div>

        <div class="schedule-slider">
            <div id="owl-schedule" class="owl-carousel">
                <?php $i = 0; $id=5;
                $arg_posts =  array(
                    'orderby'      => 'modified',
                    'order'        => 'ASC',
                    'cat' => $id,
                    'showposts'=>$n
                );
                $recent = new WP_Query($arg_posts);

                while($recent->have_posts()) : $recent->the_post(); ?>
                    <div class="item"><?php the_post_thumbnail(); ?>
                        <div class="slider-item-caption">
                            <span><?php get_cat_name( $id ) ?></span>
                            <h2><?php the_title(); ?></h2>
                            <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                        </div>
                    </div>
                <?php $i++; endwhile; ?>
            </div>

        </div>


    </section>

    <section class="fitness-center-wrap">
        <div class="container">
            <div class="head-global family-oswald">
                <h2 class="h2"><?php the_field('p_article',7); ?></h2>

            </div>

            <div class="row top_gap">
                <?php if( get_field('p1_article',7) ): ?>
                <div class="col-xs-12 col-sm-4 fit_list-block">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/cardio-icon.png" alt="cardio" />
                    </figure>
                    <div class="fit-description">
                        <h3><?php the_field('p1_article',7); ?></h3>
                        <p><?php the_field('p1_text',7); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field('p2_article',7) ): ?>
                <div class="col-xs-12 col-sm-4 fit_list-block">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/bath-icon.png" alt="cardio" />
                    </figure>
                    <div class="fit-description">
                        <h3><?php the_field('p2_article',7); ?></h3>
                        <p><?php the_field('p2_text',7); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field('p3_article',7) ): ?>
                <div class="col-xs-12 col-sm-4 fit_list-block">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/cardio-run-icon.png" alt="cardio" />
                    </figure>
                    <div class="fit-description">
                        <h3><?php the_field('p3_article',7); ?></h3>
                        <p><?php the_field('p3_text',7); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field('p4_article',7) ): ?>
                <div class="col-xs-12 col-sm-4 fit_list-block">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/karate-icon.png" alt="cardio" />
                    </figure>
                    <div class="fit-description">
                        <h3><?php the_field('p4_article',7); ?></h3>
                        <p><?php the_field('p4_text',7); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field('p5_article',7) ): ?>
                <div class="col-xs-12 col-sm-4 fit_list-block">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/watch-icon.png" alt="cardio" />
                    </figure>
                    <div class="fit-description">
                        <h3><?php the_field('p5_article',7); ?></h3>
                        <p><?php the_field('p5_text',7); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field('p6_article',7) ): ?>
                <div class="col-xs-12 col-sm-4 fit_list-block">
                    <figure>
                        <img src="<?php bloginfo('template_directory'); ?>/images/trademil.png" alt="cardio" />
                    </figure>
                    <div class="fit-description">
                        <h3><?php the_field('p6_article',7); ?></h3>
                        <p><?php the_field('p6_text',7); ?></p>
                    </div>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </section>
    <section class="schedule-section trainer-wrap-slide ">

        <div class="schedule-info">
            <h2><span>Ремонт</span> телефонов</h2>
            <p><?php $category_id = 4; echo category_description( $category_id ); ?></p>
        </div>

        <div class="schedule-slider">
            <div id="owl-trainers" class="owl-carousel">
                <?php $i = 0; $id=4;
                $arg_posts =  array(
                    'orderby'      => 'modified',
                    'order'        => 'ASC',
                    'cat' => $id,
                    'showposts'=>$n
                );
                $recent = new WP_Query($arg_posts);

                while($recent->have_posts()) : $recent->the_post(); ?>
                    <div class="item"><?php the_post_thumbnail(); ?>
                        <div class="slider-content">
                            <h3><?php the_title(); ?></h3>
                            <span><?php get_cat_name( $id ) ?></span>
                            <a href="#" class="plus-more open-info">+</a>
                        </div>
                        <div class="trainer-info-caption">
                            <h4><?php the_title(); ?></h4>
                            <span><?php the_author() ?></span>
                            <div class="trainer-info-caption_content"><?php the_content(); ?></div>
                            <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                            <a href="#" class="plus-more cross"> + </a>
                        </div>
                    </div>
                <?php $i++; endwhile; ?>
            </div>

        </div>


    </section>

    <!-- success-home-2 style start here -->
    <section class="success-home-two">
        <div class="container">
            <div class="head-global family-oswald">
                <h2 class="h2">Наши акции</h2>
            </div>
            <div class="row">
                <div id="owl-sucess-story" class="owl-carousel">
                    <?php $i = 0; $id=9;
                        $arg_posts =  array(
                            'orderby'      => 'modified',
                            'order'        => 'ASC',
                            'cat' => $id,
                            'showposts'=>$n
                        );
                        $recent = new WP_Query($arg_posts);

                    while($recent->have_posts()) : $recent->the_post(); ?>
                        <div class="item">
                            <div class="sucess-cap">
                                <strong><?php the_title(); ?></strong>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    <?php $i++; endwhile; ?>
                </div>

            </div>
        </div>
    </section>
    <!-- success-home-2 style end here -->
    <!-- latest-news-home-2 style end here -->
    <section class="latest-news-home_two">
        <div class="container">
            <div class="head-global family-oswald">
                <h2 class="h2">Последние новости</h2>
                <a href="/category/news/" class="link view-all">Показать все новости</a>
            </div>

            <div class="row top_gap">
                <?php $i = 3; $id=8;
                $arg_posts =  array(
                    'orderby'      => 'modified',
                    'order'        => 'ASC',
                    'cat' => $id,
                    'showposts'=>$n,
                    'posts_per_page'=>$i
                );
                $recent = new WP_Query($arg_posts);

                while($recent->have_posts()) : $recent->the_post(); ?>
                    <div class="col-xs-12 col-sm-4 classes-listing-wrap zoom">
                        <figure>
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                        </figure>
                        <div class="classes-content">
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            <span><?php the_author() ?><span><?php the_date() ?></span></span>
                        </div>
                        <div class="top_gap-text"><?php the_content(); ?></div>
                        <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                    </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>
    </section>
    <!-- latest-news-home-2 style end here -->

    <section class="schedule-section upcome-event">

        <div class="schedule-info">
            <h2><span>Полезные</span> статьи</h2>
            <p><?php $category_id = 10; echo category_description( $category_id ); ?></p>
        </div>

        <div class="schedule-slider">
            <div class="events-wrap clearfix">
                <?php $i = 6; $id=10;
                $arg_posts =  array(
                    'orderby'      => 'modified',
                    'order'        => 'ASC',
                    'cat' => $id,
                    'showposts'=>$n,
                    'posts_per_page'=>$i
                );
                $recent = new WP_Query($arg_posts);

                while($recent->have_posts()) : $recent->the_post(); ?>
                    <div class="event-list">
                        <span><?php the_date() ?></span>
                        <h2><?php the_title(); ?></h2>
                        <span><?php the_author() ?></span>

                        <a href="<?php the_permalink() ?>" class="link green-dark">Подробнее</a>
                    </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>


    </section>

</div>
<!--Content Area End-->

<?php get_footer(); ?>
