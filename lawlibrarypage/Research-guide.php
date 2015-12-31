<?php /* Template Name: Research Guide */ ?>
<?php get_header(); ?>




        <div id="maincontent">
        <div id="corecontent" class="widecolumn">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1><?php the_title(); ?></h1>
					<div class="postmeta">
						<?php _e("Author: ") ; ?><?php the_author_posts_link(); ?><?php _e(".") ?>

						<?php if (comments_open()) : ?><span class="comments"><?php comments_popup_link(__('0 <span>comments</span>', 'notesblog'), __('1 <span>comment</span>', 'notesblog'), __('% <span>comments</span>', 'notesblog'), '', ''); ?></span><?php endif; ?>

					</div><!-- end div postmeta -->


				<div class="entry rguide">








					<?php the_content(__('Read more', 'notesblog')); ?>



</div><!-- end div entry -->

				<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
			</div> <!-- end div post-# -->



			<?php comments_template('', true); ?>



		<?php endwhile; ?>

	<?php endif; ?>

	</div><!-- end div content -->
	</div><!-- end div maincontent -->

<div id="leftsidebarnormal"><?php get_sidebar('left'); ?></div>
<?php /* get_sidebar('right');*/ ?>
<?php get_footer(); ?>