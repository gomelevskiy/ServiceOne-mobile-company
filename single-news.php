<?php get_header(); ?>

<!--Content Area Start-->
<div id="content">
    <!-- slider-hero start here -->
    <section class="slider-hero inner-banner_info" style="background-image: url('<?php the_field('bg-top'); ?>');">
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

    <!-- 	billing-details style start here -->
    <div class="classes-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="zoom-detail-cart">
                        <figure><?php the_post_thumbnail(); ?>
                        </figure>
                    </div>
                    <div class="head-global family-oswald">
                        <h2 class="h2"><?php the_title();?></h2>
                        <span><?php the_field('dop-text'); ?></span>
                    </div>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>

                        <?php the_content(); ?>

                    <?php endwhile; endif; ?>

                    <div class="row module-comments">
                        <div>
                            <?php comments_template(); ?>
                        </div>
                    </div>

                    <div class="row yoga-class-wrap">

                        <div class="col-xs-12">
                            <div class="head-global family-oswald">
                                <h2 class="h2">Похожие новости</h2>
                            </div>
                        </div>

                        <?php $categories = get_the_category($post->ID);
                        if ($categories) {
                            $category_ids = array();
                            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                            $args=array(
                                'category__in' => $category_ids, // Сортировка производится по категориям
                                'orderby'=>rand, // Условие сортировки рандом
                                'post__not_in' => array($post->ID),
                                'showposts'=>2, //Количество выводимых записей
                                'caller_get_posts'=>1); // Запрещаем повторение ссылок
                            $my_query = new wp_query($args);
                            if( $my_query->have_posts() ) {
                                echo '<div class="related-posts">';
                                while ($my_query->have_posts()) {
                                    $my_query->the_post();
                                    ?>
                                    <div class="col-xs-12 col-sm-6 classes-listing-wrap zoom">
                                        <figure>
                                            <?php the_post_thumbnail(); ?>
                                            <span><?php the_field('price-txt'); ?></span>
                                        </figure>
                                        <div class="classes-content">
                                            <h3><?php the_title(); ?></h3>
                                            <span><?php
                                                foreach((get_the_category()) as $category) {
                                                    echo $category->cat_name . ' ';
                                                } ?></span>
                                        </div>
                                        <div class="sbox__content"><?php the_content(); ?></div>
                                        <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                                    </div>
                                    <?php
                                }
                                echo '</div>';
                            }
                            wp_reset_query();
                        }?>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- 	billing-details  style end here -->

</div>
<!--Content Area End-->


<?php get_footer(); ?>
