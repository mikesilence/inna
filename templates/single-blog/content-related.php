<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/11/2015
 * Time: 2:39 PM
 */
global $g5plus_options,$g5plus_image_size;
$related_post_place_holder_image_mode = $g5plus_options['related_post_place_holder_image_mode'];
$related_post_place_holder_image = isset($g5plus_options['related_post_place_holder_image']['url']) ? $g5plus_options['related_post_place_holder_image']['url'] : '' ;

if (($related_post_place_holder_image_mode == 2) && !empty($related_post_place_holder_image) ) {
    $related_post_place_holder_image_url  = matthewruddy_image_resize($related_post_place_holder_image,$g5plus_image_size['blog-related']['width'],$g5plus_image_size['blog-related']['height']);
    if (is_array($related_post_place_holder_image_url)) {
        $related_post_place_holder_image_url = $related_post_place_holder_image_url['url'];
    }
}



$class = array();
$class[]= "clearfix";
if (get_post_format() == 'audio') {
	$min_suffix = (isset($g5plus_options['enable_minifile_css']) && $g5plus_options['enable_minifile_css'] == 1) ? '.min' :  '';
	wp_enqueue_script( 'g5plus-jplayer-js', THEME_URL . 'assets/plugins/jquery.jPlayer/jquery.jplayer.min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'g5plus-jplayer-css', THEME_URL . 'assets/plugins/jquery.jPlayer/skin/g5plus/skin'.$min_suffix.'.css', array(), true );
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
    <div class="entry-wrap clearfix">
        <?php
        $thumbnail = g5plus_post_thumbnail('blog-related');
        if (!empty($thumbnail)) : ?>
            <div class="entry-thumbnail-wrap">
                <?php echo wp_kses_post($thumbnail); ?>
            </div>
        <?php elseif ($related_post_place_holder_image_mode == 1) : ?>
            <div class="entry-thumbnail-wrap">
                <div class="no-image">
                    <div class="no-image-inner">
                        <?php _e('No Image','g5plus-wolverine'); ?>
                    </div>
                </div>
            </div>
        <?php elseif(($related_post_place_holder_image_mode == 2) && !empty($related_post_place_holder_image_url)): ?>
            <div class="entry-thumbnail-wrap">
                <img src="<?php echo esc_url($related_post_place_holder_image_url); ?>" class="img-responsive"/>
            </div>
        <?php endif; ?>
        <div class="entry-post-meta-wrap">
            <?php g5plus_post_meta_related(); ?>
        </div>
        <h3 class="entry-title">
            <a class="bold-color link-color-hover link-color-active" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h3>
    </div>
</article>
