<?php
/*
Template Name: Vol 8 No 2 Feature
*/
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!--Start the loop -->
	<style>
	#feature-head {
		background-image: url(<?php echo get_post_meta($post->ID, 'ecpt_header_background', true); ?>);
		}
	<?php echo get_post_meta($post->ID, 'ecpt_asmag_css', true); ?></style> <!--Add features custom CSS-->
	
	<div id="feature-head">
		<div class="intro-container">
		<div class="feature-intro">
		<div class="nonbackground"><?php $image = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
			<img src="<?php echo $image; ?>"></div>
			<h3><?php the_title(); ?></h3>
			<h4 class="tagline"><?php if ( get_post_meta($post->ID, 'ecpt_tagline', true) ) : ?>  <?php echo get_post_meta($post->ID, 'ecpt_tagline', true); ?><?php endif; ?></h4>
			<p class="credit">By&nbsp;<?php the_author(); ?></p>
			<p class="othercredits"><?php if ( get_post_meta($post->ID, 'ecpt_other_credits', true) ) : ?>  <?php echo get_post_meta($post->ID, 'ecpt_other_credits', true); ?><?php endif; ?></p>

			<div class="introcopy">	
				<div class="pullquote"><?php if ( get_post_meta($post->ID, 'ecpt_pull_quote', true) ) : ?>  <?php echo get_post_meta($post->ID, 'ecpt_pull_quote', true); ?><?php endif; ?></div>
			</div><!--End intro copy-->
		</div><!--end feature-intro-->
		</div><!--end intro-containter-->
	</div><!--end feature-head-->
	<div class="headerbreak"></div>
	<div id="container-mid">
	<div id="feature">
	    
		<div class="postmaterial">
		
		<?php the_content(); ?>
		
		</div><!--End postmaterial -->
	
	<?php endwhile; ?> <?php endif; ?>
	

<?php locate_template('parts/footer_feature.php', true, false);				
 get_footer(); ?>