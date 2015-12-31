
<?php get_header(); ?>




        <div id="maincontent">
        <div id="corecontent" class="widecolumn">

	<?php

   		echo '<h2 class="listhead">';
   		_e("Your <strong>search result</strong>", "notesblog");
   		echo '</h2>';

   	?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


					<?php if ($post->post_type == 'page') : ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>



					<div><?php
										$parent_title = get_the_title($post->post_parent);
										$parent_link = get_permalink($post->post_parent);
										echo "
										<h4><strong>(page within: </strong></h4><h4><strong><a href=$parent_link>$parent_title</a>)</strong></h4>";
					?>

					</div>
					<?php endif; ?>


					<?php if ($post->post_type == 'post') : ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				   <h4><strong>Blog Post: </strong></h4><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>


					<div class="postmeta">
						<span class="author"><?php _e("By ") ?><?php the_author_posts_link(); ?><?php _e(".") ?></a></span>
							</div>
					<?php endif; ?>





					<?php if ($post->post_type == 'library_database') : ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

										<h4><strong>Library Database Description: </strong></h4><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>



					<?php endif; ?>

					<?php if ($post->post_type == 'new_acq') : ?>
					
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

										<h4><strong>New Acquisitions for </strong></h4><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>



					<?php endif; ?>
					
				<div class="entry">


					<?php the_excerpt(); ?>







				</div>
				</div>



		<?php endwhile; ?>

			<div class="widecolumn">

				<div class="left"><?php next_posts_link(__('More Search Results', 'notesblog')) ?></div>
				<div class="right"><?php previous_posts_link(__('Back to Higher Search Results', 'notesblog')) ?></div>

			</div>

		<?php else : ?>
			<div class="page">
			
				<?php
$my_id = 5792;
$post_id_5792 = get_post($my_id);
$content = $post_id_5792->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
echo $content;
?>	
			
			
			</div>

	<?php endif; ?>
	
	
	

	</div></div>

<div id="leftsidebarnormal"><?php get_sidebar('left'); ?></div>
<?php get_footer(); ?>