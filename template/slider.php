<section id="slideshow-container">
    <!-- Slideshow wrapper begin -->
    <div data-uk-slideshow="autoplay: true; animation: slide; max-height: 500">
        <div class="uk-position-relative">
            <ul class="uk-slideshow-items">
                <!-- Slide 1 begin -->
                <?php
                $query = new WP_query(array('post_type'=>'Caroussel'));
                if($query->have_posts()):
                while ($query->have_posts()): $query->the_post();
                ?>
                <li>
                    <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center">
                        <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true)[0]; ?>" alt="image" uk-cover/>
                    </div>
                    <div class="uk-container uk-position-center">
                        <div class="uk-grid">
                            <div class="uk-width-3-4@l uk-width-1-1@s uk-margin-medium-left">
                                <h1 class="uk-margin-small-bottom"><?php echo get_the_title() ?></h1>
                                <h3 class="uk-margin-small-top uk-margin-medium-bottom idz-thin uk-visible@m"><?php echo get_the_content() ?></h3>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Slide 1 end -->
                <?php endwhile;
                else: ?>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slideshow/bg_slide1_alt.jpg" alt="Image de secours" />
                    </li>
                <?php endif; ?>

                <?php
                wp_reset_postdata();
                ?>
            </ul>
        </div>
        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </div>
    <!-- Slideshow wrapper end -->
</section>