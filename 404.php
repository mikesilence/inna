<?php
get_header();
global $g5plus_options;

do_action('g5plus_before_page');
?>

<div class="page404">
    <div class="container content-wrap">
        <h2><?php echo wp_kses_post($g5plus_options['title_404']); ?></h2>
        <h4  class="description other-font"><?php echo wp_kses_post($g5plus_options['subtitle_404']); ?></h4>
        <div class="return primary-color secondary-font">
            <?php
                $go_back_link = $g5plus_options['go_back_url_404'];
                if($go_back_link ==='')
                    $go_back_link = get_home_url();
            ?>
            <a href="<?php echo esc_url($go_back_link) ?>"><?php echo wp_kses_post($g5plus_options['go_back_404']); ?></a>
        </div>
    </div>
    <div class="copyright secondary-font">
        <?php echo wp_kses_post($g5plus_options['copyright_404']); ?>
    </div>
</div>
<?php wp_footer(); ?>


