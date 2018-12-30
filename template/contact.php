<?php
/*
* Template Name: Contact
*/
?>

<?php get_header();
Fil_Ariane();
?>


<section class="uk-margin-large-bottom">
    <div class="uk-container">
        <div class="uk-grid uk-margin-medium-top">
            <div class="uk-width-1-1 uk-margin-medium-bottom">
                <h2><?php echo get_field('titre_secondaire')?></h2>
                <p class="uk-text-lead">
                    <?php
                    $content = $post->post_content;
                    echo $content;
                    ?>
                </p>
                <div class="uk-card uk-card-default uk-card-medium uk-margin-medium-top">
                    <div class="uk-card-body">
                        <div class="uk-child-width-1-3@m uk-grid-divider uk-grid-medium uk-grid-match" data-uk-grid>
                            <?php

                            if( have_rows('contact_team') ):
                                while ( have_rows('contact_team') ) : the_row();
                                    ?>
                                    <div>
                                        <h6 class="uk-text-uppercase uk-margin-remove-bottom"><?php the_sub_field('service') ?> </h6>
                                        <p class="uk-margin-small-top"><?php the_sub_field('responsability') ?></p>
                                        <ul class="uk-list idz-list-contact uk-text-success uk-margin-remove-top">
                                            <li><span class="uk-label uk-label-success"><i class="fa fa-envelope"></i></span> <a href="mailto:<?php echo the_sub_field('mail') ?>" class="uk-margin-small-left"><?php the_sub_field('mail') ?></a></li>
                                        </ul>
                                    </div>
                                <?php
                                endwhile;
                            else :
                                echo "pas de champ Repeater dans le coin !";
                            endif;
                            ?>

                        </div>
                    </div>
                    <div class="uk-card-media-bottom">
                        <div id="map"><?php dynamic_sidebar('widget_maps')?></div>
                    </div>
                </div>
            </div>
            <?php include_once('contact_form.php') ?>
        </div>
    </div>
</section>

<?php get_footer() ?>