<?php
/**
 * Template part for displaying CTA Hasora SNS
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hasora_Theme
 */
?>

<!-- SNS section -->
<section class="cta-sns">
<?php 
// ACF output
if ( function_exists('get_field') ) :
    ?>
    <div class="content-right">
    <?php
    // SNS info title
    if (get_field('sns_info_title','options')) : ?>
        <p><?php echo esc_html(the_field('sns_info_title','options')); ?></p><?php
    endif;

    ?>
    <div class="sns-links">
    <?php

        // Links to SNS
        if (get_field('sns_url1','options')) :
            $url1 = get_field('sns_url1','options'); ?>
            <a class="sns-url" href="<?php echo esc_url( $url1 ); ?>">
                <?php get_template_part('images/facebook'); ?> <!-- SVG icon file -->
            </a><?php
        endif;

        if (get_field('sns_url2','options')) :
            $url2 = get_field('sns_url2','options'); ?>
            <a class="sns-url" href="<?php echo esc_url( $url2 ); ?>">
                <?php get_template_part('images/instagram'); ?>
            </a><?php
        endif;

        if (get_field('sns_url3','options')) :
            $url3 = get_field('sns_url3','options'); ?>
            <a class="sns-url" href="<?php echo esc_url( $url3 ); ?>">
                <?php get_template_part('images/youtube'); ?>
            </a><?php
        endif;
    ?>
    </div>
    <?php
    ?>
    </div>
    <?php
    endif; // End of ACF


// SNS Feed plugin
$id = get_the_id();
if ($id == 15 ):
    // Instagram
    echo do_shortcode( '[instagram-feed feed=2]' );
elseif ($id == 11):
    // Youtube
    if (get_field('embed-youtube','options')):
        the_field('embed-youtube','options');
    endif;
endif;
?>
</section>