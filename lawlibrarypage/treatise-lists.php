
<?php /* Template Name: Treatise Lists */ ?>


<?php get_header(); ?>




        <div id="maincontent">
        <div id="content" class="widecolumn">

	<?php
	if (is_category()) {
   		echo '<h1 class="listhead">';
   		_e("Category", "notesblog");
   		echo ' <strong>';
   		single_cat_title();
   		echo '</strong></h1>';
   	} if (is_tag()) {
   		echo '<h1 class="listhead">';
   		_e("Tag", "notesblog");
   		echo ' <strong>';
   		single_tag_title();
   		echo '</strong></h1>';
   	} if (is_search()) {
   		echo '<h1 class="listhead">';
   		_e("Your <strong>search result</strong>", "notesblog");
   		echo '</h1>';
   	}
   	?>




	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1><?php the_title(); ?></h1>
					<div class="postmeta">
						<?php if (comments_open()) : ?><span class="comments"><?php comments_popup_link(__('0 <span>comments</span>', 'notesblog'), __('1 <span>comment</span>', 'notesblog'), __('% <span>comments</span>', 'notesblog'), '', ''); ?></span><?php endif; ?>

					</div>


				<div class="entry">
					<?php the_content(__('Read more', 'notesblog')); ?>


				<?php
				/* Code to render the list of sub-pages in a multi-column format. Thanks to wordimpressed.com for model and example */

				$pageArray = explode ("</li>",wp_list_pages('child_of=182&title_li=&echo=0'));
				$pageCount = count($pageArray) - 1;
				$pageColumns = round($pageCount / 3);
				$twoColumns = round($pageColumns + $pageColumns);

				        for ($i=0;$i<$pageCount;$i++) {
						if ($i<$pageColumns){
							$pageLeft = $pageLeft.''.$pageArray[$i].'</li>';
						}
					        elseif ($i<$twoColumns) {
							$pageMiddle = $pageMiddle.''.$pageArray[$i].'</li>';
						}
						elseif ($i>=$twoColumns) {
							$pageRight = $pageRight.''.$pageArray[$i].'</li>';
						}
					 };
 ?>


				<div id="treatisetopicslist">
				<div class="leftlist">
				<ul>
					<?php echo $pageLeft; ?>
					</ul></div>

				<div class="middlelist">
				<ul>
					<?php echo $pageMiddle; ?>
					</ul></div>

				<div class="rightlist">
				<ul>
				    <?php echo $pageRight; ?>
				    </ul></div>
</div>




				</div>
				<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
			</div>

			<?php comments_template('', true); ?>

		<?php endwhile; ?>

			<div class="nav widecolumn">
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
			</div>


	<?php endif; ?>

	</div></div>


<div id="leftsidebarnormal"><?php get_sidebar('left'); ?></div>
<?php /* get_sidebar('right');*/ ?>
<?php get_footer(); ?>