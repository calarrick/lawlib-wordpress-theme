
<?php get_header(); ?>




        <div id="maincontent">
        <div id="corecontent" class="widecolumn">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>


				<div class="entry">
					<?php the_excerpt(__('Read more', 'notesblog')); ?>
				</div>

			</div>

			<?php comments_template('', true); ?>

		<?php endwhile; ?>


				<div class="left"><?php next_posts_link(__('Older Acquisitions', 'notesblog')) ?></div>
				<div class="right"><?php previous_posts_link(__('Newer Acquisitions', 'notesblog')) ?></div>

			</div>


	<?php endif; ?>

	</div><!-- end content div -->
	</div><!-- end maincontent div -->


<div id="leftsidebarnormal"><?php get_sidebar('left'); ?></div>

<?php /* get_sidebar('right');*/ ?>
<?php get_footer(); ?>