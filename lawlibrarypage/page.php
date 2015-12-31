
<?php get_header(); ?>




        <div id="maincontent">
        <div id="corecontent" class="widecolumn">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1><?php if (is_page('334') || is_page('336') || is_page('338')) {echo "How do I: ";}; ?><?php the_title(); ?></h1>
					<!-- adds text to the h1 for the 'how do I' pages -- these don't have a parent other than the front, so they
					are reached by specific page id --> <div class="postmeta">
						<?php if (comments_open()) : ?><span class="comments"><?php comments_popup_link(__('0 <span>comments</span>', 'notesblog'), __('1 <span>comment</span>', 'notesblog'), __('% <span>comments</span>', 'notesblog'), '', ''); ?></span><?php endif; ?>

					</div><!-- end div postmeta -->

					
					
<?php if (($post->post_parent == '182' ) || is_page('334') || is_page ('336') || is_page ('338')) { 
		echo '<div class="entry rguide">';
		}
		else {
		echo '<div class="entry">';}
					
					
				?> <!-- Treats pages on the default template as if they were single blog posts or pages on the 
				research guide template (assigns class rguide for serif font, true smallcap, etc.) IF they either have the list of major
				treatise pages as a parent OR are the specific 'how do I?' page ids -->


<?php $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=2');
									if ($children) { ?>
									<div class=toc> <!-- creates style for the contextual subpage menus -->
									<ul>
									<?php echo $children; ?>
									</ul>
									</div> <!-- end div class toc -->
									<?php }  ?>

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