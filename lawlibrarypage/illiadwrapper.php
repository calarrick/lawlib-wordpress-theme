<?php /* Template Name: ILLiad Frame */ ?>
<?php get_header(); ?>




        <div id="illiadcontent">
        



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					
					


				<div>








					<?php the_content(__('Read more', 'notesblog')); ?>



</div>

				<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
			</div> <!-- end div post-# -->



			<?php comments_template('', true); ?>



		<?php endwhile; ?>

	<?php endif; ?>

	
	</div><!-- end div illiadcontent -->


<?php get_footer(); ?>