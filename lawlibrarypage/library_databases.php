
<?php /* Template Name: Library Databases */ ?>



<?php get_header(); ?>


	<div id="maincontent">
	<!-- <div id="corecontent"> -->
	<!-- <div class="entry page"> -->
<div id="dbfinder_intro"><a name="top"></a>
<h1><?php _e("Find Databases"); ?></h1>

<div id="dbfindertools">

<div id="dbfindersearch" class="dbleft"><h3><?php _e("Search by database title or keyword:"); ?></h3><span class="vsmalltext">
<?php _e("Searches for included material may also be helpful, e.g. 'COM docs' or 'Congressional Record' to find databases including those publications"); ?></span>

<form method="get" action="<?php bloginfo('home'); ?>/">
<input type="text" value="" name="s" size = "40" class="keyword" />
<input type='hidden' name='post_type' value='library_database' />
<input type="submit" class="button" value="Search" /></form>
</div><!-- end span dbfindersearch -->

<div id="dbcategorylist" class="dbright">
<h3><?php _e("Browse Alphabetically:"); ?></h3> <br />
<?php
$taxonomy     = 'alpha_by';
$orderby      = 'name';
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 0;      // 1 for yes, 0 for no
$title        = '';

$args = array(
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title
);
?>


<ul><li><a href="/library_database">All</a></li> <?php wp_list_categories( $args ); ?></ul>

</div>
<div id="dbtypebrowse" class="dbright">
 
 <h3>Select by Type:</h3>
<?php the_dropdown_taxonomy('db_type'); ?>

 </div>



</div>

<p class="descriptionblock">This page lists legal research databases to which the law library subscribes and selected other online resources of strong legal research value.  Whenever possible we provide off site access,
normally via VPN.  Read the comments to determine if off campus access to listed databases will require VPN setup or password-based access.  This tool locates online research platforms, databases, full-text repositories, and other such research tools.  Individual journals that happen to be available in electronic form are not listed here - for those use the <a href="http://catalog.case.edu">Library Catalog</a> or <a href="http://lu4ld3lr5v.search.serialssolutions.com/">A-Z serials list</a>.
</p>
</div> <!-- end of dbfinder intro div -->
	

	<!--  end of content widecolumn div -->
</div> <!-- end of centercolumn div -->


<div id="leftsidebarnormal"><?php get_sidebar('left'); ?></div>
<?php get_footer(); ?>

