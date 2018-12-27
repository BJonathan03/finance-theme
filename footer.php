<footer>
    <div class="uk-container uk-light">
        <div class="uk-grid uk-margin-large-top">
            <div class="uk-width-1-4@l uk-width-1-5@m uk-width-1-3@s">
                <ul class="uk-list">
                    <?php
                    $args = array(
                        'menu' => 'Menu 2',
                        'container_class' => false,
                        'items_wrap' => '%3$s',
                        'container' => false,
                    );
                    wp_nav_menu($args);
                    ?>
                </ul>
            </div>
            <div class="uk-width-1-4@l uk-width-1-5@m uk-width-1-3@s">
                <ul class="uk-list">
                    <?php
                    $args = array(
                        'menu' => 'Menu 3',
                        'container_class' => false,
                        'items_wrap' => '%3$s',
                        'container' => false,
                    );
                    wp_nav_menu($args);
                    ?>
                </ul>
            </div>
            <div class="uk-width-1-4@l uk-width-1-5@m uk-width-1-3@s">
                <ul class="uk-list">
                    <?php
                    $args = array(
                        'menu' => 'Menu 4',
                        'container_class' => false,
                        'items_wrap' => '%3$s',
                        'container' => false,
                    );
                    wp_nav_menu($args);
                    ?>
                </ul>
            </div>
            <div class="uk-width-1-4@l uk-width-2-5@m uk-width-1-1@s">
                <div class="uk-align-right idz-footer-adjust">
                    <a href="" class="uk-icon-button uk-margin-small-right" data-uk-icon="icon: facebook"></a>
                    <a href="" class="uk-icon-button  uk-margin-small-right" data-uk-icon="icon: twitter"></a>
                    <a href="" class="uk-icon-button  uk-margin-small-right" data-uk-icon="icon: instagram"></a>
                    <a href="" class="uk-icon-button" data-uk-icon="icon: youtube"></a>
                </div>
            </div>
            <div class="uk-width-1-1 uk-margin-large-top uk-margin-large-bottom">
                <!-- logo footer begin -->
                <div id="footer-logo">
                    <?php dynamic_sidebar('widget_footer')?>
                </div>

                <!-- logo footer end -->
            </div>
        </div>
    </div>
    <a class="uk-inline" href="#" data-uk-totop data-uk-scroll data-uk-scrollspy="cls: uk-animation-fade; hidden: true; offset-top: 100px; repeat: true"></a>
   <?php _e('Theme de base réalisé by Jon', 'wp-theme-base-translate'); ?>
</footer>
<!-- Javascript -->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/uikit.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/uikit-icons.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/components/mediaelement.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/config.js"></script>
</body>

</html>