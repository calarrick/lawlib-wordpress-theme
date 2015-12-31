<?php
/*
Template Name: Front
*/
?>



<?php get_header(); ?>




        <div id="frontmaincontent">

		<div id="topleftwidget">
        
	<?php
		$my_id = 13050;
		$post_id_13050 = get_post($my_id);
		$content = $post_id_13050->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
?>
         <?php /* if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('TopLeft') ) : ?>
        <?php endif; */?>
        
        </div>  <!-- end div topleftwidget --> 

        <div id="toprightwidget">
        <ul>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('TopRight') ) : ?>
        <?php endif; ?>
        </ul>
        </div> <!-- end div toprightwidget -->


        <div id="corecontent" class="widecolumn">

 <div class="catalogquicksearch"><div class="quicksearchheading"><h2><strong>Search the CWRU Libraries' Catalog</strong></h2>(locate on campus):</div><form action="http://catalog.case.edu/search/X"><select name="searchtype"><option value="X">Keyword</option><option value="t">Title</option> <option value="a">Author</option><option value="d">Subject</option></select><input title="Enter your search query." type="text" name="searcharg" size="35" /><input class="searchBtn" type="submit" name="submit" value="Search" /></form><form action="http://catalog.case.edu/search/X"><a title="External link" href="http://catalog.case.edu/" target="_blank">more CWRU search options</a></form></div><div class="catalogquicksearch"><div class="quicksearchheading"><h2><strong>Search the Shared OhioLINK Catalog</strong></h2>(check holdings throughout Ohio):</div><form action="http://olc1.ohiolink.edu/search/X"><select name="searchtype"><option value="X">Keyword</option><option value="t">Title</option> <option value="a">Author</option><option value="d">Subject</option></select><input title="Enter your search query." type="text" name="searcharg" size="35" /><input class="searchBtn" type="submit" name="submit" value="Search" /></form><form action="http://olc1.ohiolink.edu/search/X"><a title="External link" href="http://www.ohiolink.edu" target="_blank">more OhioLINK search options</a></form></div>   <!-- these lines end the loop that generates only the front page catalog search items -->



	
	
	</div> <!-- end corecontent div -->
	</div> <!-- end frontmaincontent div -->

<div id="leftsidebarfrontblog">
<?php get_sidebar('left'); ?></div> <!-- ends div that positions the left sidebar correctly for this page -->
<?php get_sidebar('right'); ?>


<div id="belowfold">

	<div id="frontpageblogexcerpt">

	<div id="frontpageblogheading"><h2><?php _e('Most Recent Blog Posts'); ?></h2>
	<span id="bloglink"><a href="/blog"><?php _e('Read Library Blog'); ?></a></span> <a href="http://feeds.feedburner.com/TheJudgeBenCGreenLawLibrary" title="<?php _e('Syndicate this site using RSS'); ?>">
<img src="http://www.mozilla.org/images/feed-icon-14x14.png" alt="RSS Feed" title="RSS Feed" />
</a></div> <!-- end frontpageblogheading div -->




	<?php global $post; $myposts = get_posts ('category=-35'); // this is to run another loop for the recent blog posts
	foreach($myposts as $post) :
	setup_postdata($post);
	?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

	<div class="postmeta">
									<span class="author"><?php _e("By");?> <?php the_author_posts_link(); ?><?php _e(".") ?></span>
								<span class="timestamp"><?php the_time(__('F jS, Y')) ?> </span>
						</div> <!-- end div postmeta -->

	<div class="entry archiveexcerpt">
	<?php the_excerpt(); ?>
	</div> <!-- end div entry -->
	</div> <!-- end post-# div -->

	<?php endforeach; ?>
	<p class="center"><a href="/blog"><?php _e("All Posts"); ?></a></p>


	</div> <!-- end frontpageblogexcerpt div -->

<div class="fb-like-box">



	<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcaselawlibrary&amp;width=380&amp;height=800&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:380px; height:800px;" ></iframe>
	
	</div>
	
</div> <!-- end belowfold div -->

<?php get_footer(); ?>
