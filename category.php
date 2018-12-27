<?php get_header() ?>

<?php
GkAriane();
?>



<section class="uk-margin-large-bottom">
    <div class="uk-container">
        <div class="uk-grid uk-margin-medium-top">
            <div class="uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">

                    <article class="uk-article idz-article">
                        <?php while (have_posts()) : the_post();
                        echo  '<p class="uk-article-meta"><span class="uk-label uk-label-success">' . get_the_date( 'l F j, Y' ) .'</span>  &nbsp;&nbsp; | &nbsp;&nbsp; Written by <a href="">' . get_the_author().' </a></p>' ?>
                        <h3 class="uk-margin-small-top"><a class="uk-link-reset" href="<?php the_permalink() ?>"><?php the_title() ?></a></h3> <img class="uk-margin-bottom" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'small', true)[0]; ?>" alt="">
                        <div class="uk-margin-large-left">
                            <div class="uk-margin-small-bottom">
                                <?php dynamic_sidebar('widget_social')?>
                            </div>
                            <p><?php echo get_the_content(); ?></p>
                            <div> <a class="uk-button uk-button-text" href="<?php the_permalink() ?>">Continue Reading...</a> </div>
                        </div> <br/>
                        <?php
                        endwhile;
                            the_posts_pagination( array(
                                'mid_size' => 2,
                                'prev_text' => __( '<span aria-hidden="true">&laquo;</span>', 'textdomain' ),
                                'next_text' => __( '<span aria-hidden="true">&raquo;</span>', 'textdomain' ),
                                'screen_reader_text' => ' ',
                            ) );


                        ?>
                    </article>
                <?php


                wp_reset_postdata();
                ?>

            </div>
            <div class="uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
                <aside class="uk-margin-medium-bottom">
                    <div class="uk-card uk-card-default idz-widget-card uk-card-body">
                        <h5 class="uk-text-uppercase uk-margin-remove-bottom">Categories</h5>
                        <ul class="uk-list uk-list-divider idz-categories-widget">
                            <?php

                            $cat_args=array(
                                'orderby' => 'name',
                                'order' => 'ASC'
                            );
                            $categories=get_categories($cat_args);
                            foreach($categories as $category) {
                                $args=array(
                                    'showposts' => -1,
                                    'category__in' => array($category->term_id),
                                    'caller_get_posts'=>1
                                );

                                if ($category->term_id !== 17) {

                                    echo'<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Afficher les articles relatifs à cette catégories" ), $category->name ) . '" >'. ucfirst(strtolower($category->name)).'<span class="uk-float-right" data-uk-icon="icon: triangle-right; ratio: 0.9"></span></a></li>';

                                } // if
                            } // foreach($categories
                            wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>
