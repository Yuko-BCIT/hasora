
			<!-- SNS section -->
			<section class="sns-links">
          	<?php 
          	// ACF output
			if ( function_exists('get_field') ) :
				// SNS info title
				if (get_field('sns_info_title')) : ?>
					<h2><?php the_field('sns_info_title'); ?></h2><?php
				endif;

				// Links to SNS
				if (get_field('sns_url1')) :
					$url1 = get_field('sns_url1'); ?>
					<a class="sns-url" href="<?php echo esc_url( $url1 ); ?>">
						<?php get_template_part('images/facebook'); ?> <!-- SVG icon file -->
					</a><?php
				endif;

				if (get_field('sns_url2')) :
					$url2 = get_field('sns_url2'); ?>
					<a class="sns-url" href="<?php echo esc_url( $url2 ); ?>">
						<?php get_template_part('images/instagram'); ?>
					</a><?php
				endif;

				if (get_field('sns_url3')) :
					$url3 = get_field('sns_url3'); ?>
					<a class="sns-url" href="<?php echo esc_url( $url3 ); ?>">
						<?php get_template_part('images/youtube'); ?>
					</a><?php
				endif;
			endif; // End of ACF
			
			// SNS Feed plugin
            $id = get_the_id();
            if ($id == 15 ):
                // Instagram
    			echo do_shortcode( '[instagram-feed feed=2]' );
            elseif ($id == 11):
                // Youtube
                // do something
            endif;
			?>
    		</section>