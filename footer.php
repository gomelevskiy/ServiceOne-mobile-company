<!--Footer Section Start-->
<footer id="footer" class="footer-two">
    <div class="container">
        <div class="primary-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 footer-logo footer-l">
                    <a href="/"> <img src="<?php bloginfo('template_directory'); ?>/img/home-2_logo.png" alt="footer-logo" /></a>
                    <p>
                        <?php the_field('address',7); ?>
                    </p>

                    <span class="mail-id">Email : <a href="mailto:<?php the_field('email',7); ?>"><?php the_field('email',7); ?></a></span>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 class-time footer-l">
                    <h4>МЕНЮ</h4>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'container' => 'ul',
                        'menu_class'=> 'class-list clearfix'
                    ) ); ?>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 class-time timing-box footer-l">
                    <h4>Часы работы:</h4>
                    <ul class="class-list clearfix">
                        <li>
                            ПН ПТ <span class="hr"></span> <?php the_field('time_from',7); ?>
                        </li>
                        <li>
                            СБ ВС <span class="hr width-more"></span>  <?php the_field('time_to',7); ?>

                        </li>

                    </ul>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-2 footer-l">
                    <div class="boxing-inner">
                        <span>от 200р</span>
                        <strong>Ремонт <span>телефонов</span></strong>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="home-2-footer">
        <div class="container">
            <div class="bottom-footer">
                <div class="row">
                    <div class="col xs-12 col-sm-5 col-lg-6 copy-right">
                        <p>
                            @2017. Все права защищены.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-6">
                        <div class="calling-contact">
                            <span>Позвоните нам</span>
                            <a href="#"><?php the_field('tel_1',7); ?></a>
                            <a href="#"><?php the_field('tel_2',7); ?></a>
                        </div>

                        <ul class="media-wrap clearfix">
<!--                            <li>-->
<!--                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="facebook"><i class="fa fa-twitter"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="facebook"><i class="fa fa-rss"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="facebook"><i class="fa fa-google-plus"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="facebook"><i class="fa fa fa-linkedin"></i></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="facebook"><i class="fa fa-youtube-play"></i></a>-->
<!--                            </li>-->
                            <li>
                                <a href="<?php the_field('link_vk',7); ?>" class="vk"><i class="fa fa-vk"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
<!--Footer Section End-->

</div>
<!--Page Wrapper End-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/angular.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/less.js"></script>

<!-- revolution Js -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.revolution.js"></script>
<!-- revolution Js-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/site.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>

</body>
</html>