<div id="rightsidebar" class="side">




<div id="howtos"><h2><?php _e("How do I..."); ?></h2>
<?php wp_nav_menu (array('theme_location' => 'how_tos_menu')); ?></div> <!-- end howtos div -->


<div id="recentnewacq">
<h2>Visit Our Scholarly Commons!</h2>
<div id="commonsimageframe"><a href="http://scholarlycommons.law.case.edu"><img src="http://lawlibrary.case.edu/wp-content/uploads/2014/05/Mini-Repos-e1400702448985.jpg" alt="Screenshot of Scholarly Commons" width="173"></a></div>
<p>Search, browse, download, and read scholarship from our world-renowned faculty.</p>

</div>


<!--
<div id="recentnewacq">
<h2><?php _e("New acquisitions from:"); ?></h2>

<ul><?php wp_reset_query();  ?>
<?php
$args = array (
		'post_type' => 'new_acq',

		'posts_per_page=5'
		);


query_posts($args);
while(have_posts()) : the_post(); ?><li>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</li><?php endwhile; ?>
<li class="last"><a href="/new_acq"><?php _e("All new acquisitions"); ?></a> <a href="http://feeds.feedburner.com/LawLibraryNewAcquisitions"> <img src="http://www.mozilla.org/images/feed-icon-14x14.png" alt="RSS Feed" title="RSS Feed" /></a>
</li>
</ul>

</div> --> <!-- end recentnewacq div -->




<ul>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Rightbar') ) : ?>
		<li id="search">
			<h2><?php _e("Search"); ?></h2>
			<?php get_search_form(); ?>
		</li>
		<li id="tag_cloud">
			<h2><?php _e("Tag Cloud");?></h2>
			<?php wp_tag_cloud('smallest=10&largest=20&unit=px'); ?>
		</li>
		<?php wp_list_categories('title_li=<h2>' .__('Categories') . '</h2>'); ?>
		<?php wp_list_pages('title_li=<h2>' .__('Pages') . '</h2>'); ?>
		<?php wp_list_bookmarks(); ?>
	<?php endif; ?>

</ul>
</div>