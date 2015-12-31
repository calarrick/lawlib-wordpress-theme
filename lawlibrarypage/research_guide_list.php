

<?php /* Template Name: RGuide Top Page */ ?>

<?php get_header(); ?>




        <div id="maincontent">
        <div id="corecontent" class="widecolumn">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1><?php the_title(); ?></h1>



				<div class="entry">
<div class ="subpagelist">
					<?php the_content(__('Read more', 'notesblog')); ?>


				<?php
				  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=1');
				  if ($children) { ?>
				  <ul>
				  <?php echo $children; ?>
				  </ul>

  <?php } ?>



				</div></div>
				<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
			</div>


		<?php endwhile; ?>




	<?php endif; ?>

	</div></div>


<div id="leftsidebarnormal"><?php get_sidebar('left'); ?></div>
<?php /* get_sidebar('right');*/ ?>
<?php get_footer(); ?>