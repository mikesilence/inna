<?php
/*---------------------------------------------------
/* THEME ADD ACTION
/*---------------------------------------------------*/

remove_action('g5plus_after_single_post_content','g5plus_share',15);

/*================================================
COMMENT FORM BEFORE
================================================== */
if (!function_exists('g5plus_comment_form_before_fields')) {
    function g5plus_comment_form_before_fields() {
        ?>
        <div class="comment-fields-wrap">
            <div class="entry-comments-form-avatar">
                <?php echo get_avatar(get_current_user_id(), '100'); ?>
            </div>
            <div class="comment-fields-inner clearfix">
                <div class="row">
        <?php
    }
    //add_action('comment_form_before_fields','g5plus_comment_form_before_fields');
    //add_action('comment_form_logged_in_after','g5plus_comment_form_before_fields');
}

/*================================================
COMMENT BOTTOM FORM
================================================== */
if (!function_exists('g5plus_bottom_comment_form')) {
    function g5plus_bottom_comment_form() {
        echo '</div></div></div>';
    }
    //add_action('comment_form','g5plus_bottom_comment_form');
}

add_action('g5plus_after_single_post_content','comments_template',35);




