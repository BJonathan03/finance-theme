<?php get_header();
Fil_Ariane();
?>


<section class="uk-margin-medium-bottom">
    <div class="uk-container uk-container-expand uk-background-default">
        <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <?php
                    while (have_posts()) : the_post();
                    $content = $post->post_content;

                    echo  '<p class="uk-article-meta"><span class="uk-label uk-label-success">' . get_the_date( 'l F j, Y' ) .'</span>  &nbsp;&nbsp; | &nbsp;&nbsp; Written by <a href="">' . get_the_author().' </a></p>' ?>
                    <h3 class="uk-margin-small-top"><a class="uk-link-reset" href=""><?php the_title() ?></a></h3> <img class="uk-margin-bottom" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'large', true)[0]; ?>" alt="">

                    <?php echo '<p class="uk-text-lead uk-margin-small-bottom">'.$content.'</p>'; ?>
                    <div class="uk-margin-large-left">
                        <div class="uk-margin-small-bottom">
                            <?php dynamic_sidebar('widget_social')?>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

