<?php get_header(); ?>

<?php
Fil_Ariane();

?>


<section class="uk-margin-large-bottom">
    <div class="uk-container">
        <div class="uk-grid uk-margin-medium-top">
            <div class="uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
                <article class="uk-article idz-article">
                    <?php
                    while (have_posts()) : the_post();
                    $content = $post->post_content;

                    echo  '<p class="uk-article-meta"><span class="uk-label uk-label-success">' . get_the_date( 'l F j, Y' ) .'</span>  &nbsp;&nbsp; | &nbsp;&nbsp; Written by <a href="">' . get_the_author().' </a></p>' ?>
                    <h3 class="uk-margin-small-top"><a class="uk-link-reset" href=""><?php the_title() ?></a></h3> <img class="uk-margin-bottom" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'small', true)[0]; ?>" alt="">

                    <?php echo $content; ?>
                    <div class="uk-margin-large-left">
                        <div class="uk-margin-small-bottom">
                            <?php dynamic_sidebar('widget_social')?>
                        </div>
                    </div>
                    <div class="uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-small uk-grid-match uk-margin-medium-top" data-uk-grid >

                        <?php

                        $cat_args=array(
                            'orderby' => 'name',
                            'order' => 'ASC'
                        );
                        $categories=get_the_category();
                        foreach($categories as $category) {
                            $args=array(
                                'showposts' => -1,
                                'category__in' => array($category->term_id),
                                'caller_get_posts'=>1
                            );
                            $posts=get_posts($args);
                            if ($posts && $category->term_id !== 17) {

                                ?><div>
                                <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card " style="background-color:<?php the_field('color_category', $category); ?> ">
                                    <?php echo'<h6 class="uk-text-uppercase uk-margin-small-bottom">' . $category->name.'</h6>' ?>
                                    <?php echo'<p class="uk-margin-remove-top">'.category_description($category->term_id).'</p>'; ?>
                                    <?php echo'<div class="uk-position-bottom-right"> <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Afficher les articles relatifs à cette catégories" ), $category->name ) . '" ' . '><i class="fa fa-2x fa-angle-right"></i></a> </div>' ?>
                                </div>
                                </div>
                                <?php
                            } // if ($posts
                        } // foreach($categories
                        wp_reset_postdata(); ?>
                    </div>
                    <?php endwhile;?>
                </article>
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
                                $posts=get_posts($args);
                                if ($posts && $category->term_id !== 17) {
                                    echo'<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Afficher les articles relatifs à cette catégories" ), $category->name ) . '" >'. ucfirst(strtolower($category->name)).'<span class="uk-float-right" data-uk-icon="icon: triangle-right; ratio: 0.9"></span></a></li>';

                                } // if ($posts
                            } // foreach($categories
                            wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

