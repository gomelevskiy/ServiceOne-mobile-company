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

    <section class="breadcrum-sec">
        <div class="container">

            <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>

        </div>
    </section>
    <!-- contact-info start here -->
    <section class="contact-info">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>
        </div>
    </section>
    <!-- contact-info end here -->


</div>
<!--Content Area End-->

<?php get_footer(); ?>
