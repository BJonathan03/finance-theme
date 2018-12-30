
<?php get_header();
Fil_Ariane();
$content = $post->post_content;

?>

<section class="uk-margin-medium-bottom">
<div class="uk-container uk-container-expand uk-background-default">
    <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <h2 class="uk-margin-small-top uk-margin-remove-bottom"><?php echo get_the_title(); ?></h2>
                <img class="uk-margin-bottom" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'large', true)[0]; ?>" alt="">
                <p class="uk-text-lead uk-margin-small-bottom"><?php echo $content ?></p>

            </div>
        </div>
    </div>
</div>
</section>


<?php get_footer() ?>