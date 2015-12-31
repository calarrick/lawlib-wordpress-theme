
<?php get_header(); ?>

<!-- this template basically just runs the main loop for the blog section, but I've left in 'residual' code so things will still work if certain other templates are omitted.  This index template is modified (heavily) from one included in the Notes Blog Core Theme and as such is freely licensed under GPL3 -->
        <div id="frontmaincontent">
        <div id="corecontent" class="widecolumn">

	<?php
	if (is_category()) {
   		echo '<h1 class="listhead">';
   		_e("Category ");
   		echo ' <strong>';
   		single_cat_title();
   		echo '</strong></h1>';
   	} if (is_tag()) {
   		echo '<h1 class="listhead">';
   		_e("Tag");
   		echo ' <strong>';
   		single_tag_title();
   		echo '</strong></h1>';
   	} if (is_search()) {
   		echo '<h1 class="listhead">';
   		_e("Your <strong>search result</strong>");
   		echo '</h1>';
   	}
   	?>


	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts ( '&cat=-35&posts_per_page='.get_option('posts_per_page').'&paged=' .$paged); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

<br /><span class="postmeta"><span class="author"><?php _e("By");?> <?php the_author_posts_link(); ?><?php _e(".") ?></span>
							 <span class="timestamp"><?php the_time(__('F jS, Y')) ?> </span>
							 </span>

				<div class="entry blogloop">




					<?php the_excerpt(); ?>



				</div><!-- end div entry -->

				<div class="postmeta">
																	<?php if (comments_open()) : ?><span class="comments"><?php comments_popup_link(__('0 <span>comments</span>', 'notesblog'), __('1 <span>comment</span>', 'notesblog'), __('% <span>comments</span>', 'notesblog'), '', ''); ?></span><?php endif; ?>

																	<span class="categories"><?php _e("Categories:");?> <?php the_category(', '); ?><?php _e(".") ?></span>
																	<span class="tags"><?php the_tags(__('Tagged with: ', 'notesblog'),', ',''); ?></span>
																	</div> <!-- end div postmeta -->

				<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
			</div> <!-- end div post-# -->

			<?php comments_template('', true); ?>

		<?php endwhile; ?>

			<div class="widecolumn"> <!-- this is for the next previous function with single post displays -->
			<?php if (is_attachment()) { ?>
				<div class="left"><?php next_image_link('', __('View previous', 'notesblog')); ?></div>
				<div class="right"><?php previous_image_link('', __('View next', 'notesblog')); ?></div>
			<?php } elseif (is_single()) { ?>
				<?php next_post_link('<div class="right">%link</div>'); ?>
				<?php previous_post_link('<div class="left">%link</div>'); ?>
			<?php } else { ?>
				<div class="left"><?php next_posts_link(__('Read previous entries', 'notesblog')) ?></div>
				<div class="right"><?php previous_posts_link(__('Read more recent entries', 'notesblog')) ?></div>
			<?php } ?>
			</div> <!-- end div nav widecolumn -->

	<?php else : ?>
		<!-- search found nothing --> <!-- with search template this should never be used -->
		<?php if (is_search()) { ?>
			<div class="post single">
				<h2><?php _e('We got nothing!');?></h2>
				<p><?php _e('Your search query didn\'t return any results. We\'re sorry about that, why don\'t you give it another go, tweaking it a bit perhaps? Use the search box as you did before, maybe you\'ll have more luck.','notesblog');?></p>
				<h3><?php _e('Something to read?');?></h3>
				<p><?php _e('Want to read something else? These are the 20 latest updates:');?></p>
				<ul><?php wp_get_archives('type=postbypost&limit=20&format=html'); ?></ul>
			</div>
		<?php } ?>
		<!-- 404 page not found --> <!-- with 404 template this should never be used -->
		<?php if (is_404()) { ?>
			<h1 class="listhead"><?php _e('This is a <strong>404 Page Not Found</strong>');?></h1>
			<div class="post single">
				<h2><?php _e('There\'s nothing here!');?></h2>
				<p><?php _e('We\'re sorry, but there is nothing here! You might even call this a <strong>404 Page Not Found</strong> error message, which is exactly what it is. The page you\'re looking for either doesn\'t exist, or the URL you followed or typed to get to it is incorrect in some way.');?></p>
				<p><?php _e('<strong>Why don\'t you try and search for it?</strong> Use the search box and try to think of a suitable keyword query, and you\'ll probably be fine.');?></p>
				<p><?php _e('You\'re sure that it should be here, that page you were looking for? <a href="/contact">Then tell us about it!</a>');?></p>
				<h3><?php _e('Something to read?','notesblog');?></h3>
				<p><?php _e('Want to read something else? These are the 20 latest updates:');?></p>
				<ul><?php wp_get_archives('type=postbypost&limit=20&format=html'); ?></ul>
			</div>
		<?php } ?>
	<?php endif; ?>

	</div> <!-- end div corecontent -->
	</div>	<!-- end div frontmaincontent -->

<div id="leftsidebarfrontblog">
<?php get_sidebar('left'); ?></div> <!-- ends div that places left sidebar correctly for blog front page -->
<?php get_sidebar('blog'); ?>


<?php get_footer(); ?>