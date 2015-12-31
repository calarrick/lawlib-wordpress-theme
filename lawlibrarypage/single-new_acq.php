
<?php get_header(); ?>




        <div id="maincontent">
        <div id="corecontent" class="widecolumn">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1><?php the_title(); ?></h1>








				<div class="entry newacqpage">






					<?php the_content(__('Read more', 'notesblog')); ?>







				</div>








				<?php  { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
			</div>





			<?php comments_template('', true); ?>

		<?php endwhile; ?>



				<?php next_post_link('<div class="nextpost">Next: %link</div>'); ?>
				<?php previous_post_link('<div class="prevpost">Previous: %link</div>'); ?>




	<?php endif; ?>

	</div><!-- end content div -->
	</div><!-- end maincontent div -->


<div id="leftsidebarnormal"><?php get_sidebar('left'); ?></div>
<?php /* get_sidebar('right');*/ ?>
<?php get_footer(); ?>