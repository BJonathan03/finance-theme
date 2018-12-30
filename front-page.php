
<!DOCTYPE html>

<?php
    get_header();

    include_once('template/slider.php');
?>

<section style="padding-top: 30px">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-default uk-card-body">
                    <h2 class="uk-text-center"><?php echo get_field('titre_secondaire')?></h2>
                    <div class="uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-1@s" data-uk-grid>
                        <?php
                        $query = new WP_query(array('post_type'=>'Atouts'));
                        if($query->have_posts()):
                        while ($query->have_posts()): $query->the_post();
                        ?>
                        <div class="uk-text-center"> <img class="uk-margin-bottom" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'small', true)[0]; ?>" alt="image">
                            <h6 class="uk-text-uppercase uk-text-muted uk-margin-remove-top uk-margin-small-bottom"><?php the_title() ?></h6>
                            <p class="uk-margin-remove-top"><?php the_content() ?></p>
                        </div>
                        <?php endwhile;
                        else: ?>
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slideshow/bg_slide1_alt.jpg" alt="Image de secours" />
                            </li>
                        <?php endif; ?>

                        <?php
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="uk-margin-large-bottom idz-invest-product">
    <div class="uk-container">
        <div class="uk-grid uk-margin-small-top">
            <div class="uk-width-3-5@l uk-width-1-1@m uk-width-1-1@s">
                <?php
                $content = $post->post_content;
                echo $content;
                ?>
                    <div class="uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-small uk-grid-match uk-margin-medium-top" data-uk-grid >

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

                                ?><div>
                                    <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card " style="background-color:<?php the_field('color_category', $category); ?> ">
                                        <?php echo'<h6 class="uk-text-uppercase uk-margin-small-bottom">' . $category->name.'</h6>' ?>
                                        <?php echo'<p class="uk-margin-remove-top">'.category_description($category->term_id).'</p>' ?>
                                        <?php echo'<div class="uk-position-bottom-right"> <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Afficher les articles relatifs à la catégorie ".strtolower($category->name) )) . '" ' . '><i class="fa fa-2x fa-angle-right"></i></a> </div>' ?>
                                    </div>
                                </div>
                                        <?php
                            } // if ($posts
                        } // foreach($categories)
                        wp_reset_postdata();
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section>

    <?php include_once('template/litle_form.php') ?>

</section>

<?php
    get_footer();
?>