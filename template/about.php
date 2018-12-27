<?php

/*
* Template Name: About us
 *
 * Cette page peut-être appelée dans la back office mais correspond à page-about-us.php
 * Elle n'est donc pas utilisée mais montre que l'utilisation d'un Template Name dans le back office fonctionne également
*/

?>

<?php get_header();

    GkAriane();
    ?>

    <section class="uk-margin-medium-bottom">
        <div class="uk-container uk-container-expand uk-background-default">
            <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h2 class="uk-margin-small-top uk-margin-remove-bottom"><?php echo get_field('titre_secondaire')?></h2>
                        <p class="uk-text-lead uk-margin-small-bottom"><?php /*$content =  $post;
                                        var_dump($content);*/
                            $content = $post->post_content;
                            echo $content;
                            ?>
                        </p>
                        <div class="uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-1@s uk-margin-medium-top uk-text-center" data-uk-grid>
                        <?php

                        if( have_rows('perso') ):
                            // boucle sur les champs du repeater
                            while ( have_rows('perso') ) : the_row();
                                $image = get_sub_field('photo');
                                ?>

                                    <div> <img class="uk-border-circle uk-margin-remove-bottom" src="<?php echo $image['url'] ?>" width="200" height="200" alt="" />
                                        <h4 class="uk-margin-small-top uk-margin-remove-bottom"> <?php the_sub_field('perso_name') ?></h4>
                                        <p class="uk-margin-remove-top"><?php the_sub_field('function') ?></p>
                                    </div>

                            <?php

                            endwhile;
                        else :
                            // pas de champs Repeater
                            echo "pas de champ Repeater dans le coin !";
                        endif;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section>
    <?php dynamic_sidebar('widget_cv')?>
</section>

<?php get_footer() ?>