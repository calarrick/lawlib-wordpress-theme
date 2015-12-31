
<?php get_header(); ?>




        <div id="maincontent">
        <div id="corecontent" class="widecolumn">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1><?php the_title(); ?></h1>

						<div class="postmeta">
							<span class="author"><?php _e("By ") ?><?php the_author_posts_link(); ?><?php _e(".") ?></span>
							<span class="timestamp"><?php the_time(__('F jS, Y')) ?> </span>
						</div>






				<div class="entry singlepost">






					<?php the_content(__('Read more')); ?>







				</div>




				<div class="postmeta">
											<span class="categories"><?php _e("Categories: ");?> <?php the_category(', '); ?><?php _e(".") ?></span>
												<span class="tags"><?php the_tags(__('Tagged with '),', ',''); ?></span>
							</div>



				<?php  { edit_post_link(__('Edit'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:') .' &after=</p>'); } ?>
			</div>





			<?php comments_template('', true); ?>

		<?php endwhile; ?>


<div class="prevnext">
				<?php next_post_link('<div class="nextpost">Next: %link</div>'); ?>
				<?php previous_post_link('<div class="prevpost">Previous: %link</div>'); ?>
</div>



	<?php endif; ?>

	</div><!-- end content div -->
	</div><!-- end maincontent div -->


<div id="leftsidebarnormal"><?php get_sidebar('left'); ?></div>
<?php /* get_sidebar('right');*/ ?>
<?php get_footer(); ?>