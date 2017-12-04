<?php get_header(); ?>

<!--Content Area Start-->
<div id="content">
    <!-- slider-hero start here -->
    <section class="slider-hero inner-banner_info"  style="background-image: url(<?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('background-rubric', $taxonomy . '_' .$term_id); ?>)">
        <div class="container">
            <h1><?php echo get_cat_name(8);?></h1>
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

    <!-- 	main-blog-content style start here -->
    <section class="main-blog-content">
        <div class="container">
            <div class="row">

                <?php $i = 0; $id=8;
                $arg_posts =  array(
                    'orderby'      => 'modified',
                    'order'        => 'ASC',
                    'cat' => $id,
                    'showposts'=>$n
                );
                $recent = new WP_Query($arg_posts);

                while($recent->have_posts()) : $recent->the_post(); ?>
                        <div class="col-xs-12 col-sm-8">
                            <div class="blog-program">
                                <div class="zoom">
                                    <figure>
                                        <?php the_post_thumbnail('full'); ?>
                                    </figure>
                                </div>
                                <div class="classes-content">
                                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                    <span><?php the_author() ?><span><?php the_date() ?></span><span><a href="<?php the_permalink() ?>"><?php comments_number("нет комментариев", "<i>2</i> комментарий", "<i>%</i> комментариев"); ?></a></span></span>
                                </div>
                                <div class="sbox__content"><?php the_content(); ?></div>
                                <a href="<?php the_permalink() ?>" class="link">Читать новость</a>
                            </div>
                        </div>
                <?php $i++; endwhile; ?>

            </div>
        </div>
    </section>
    <!-- 	main-blog-content style end here -->

</div>
<!--Content Area End-->

<?php get_footer(); ?>
