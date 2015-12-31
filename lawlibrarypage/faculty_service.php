
<?php /* Template Name: Faculty Service */ ?>

<?php get_header(); ?>




        <div id="maincontent">
        <div id="corecontent" class="widecolumn">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>





				<div class="entry">

<h3 class="menu-actions-label"><?php _e("Interact:"); ?><br /></h3><h3 style="display:inline">
<?php wp_nav_menu (array('theme_location' => 'faculty_actions', 'container_class' => 'menu-actions-container')); ?>
</h3>


<?php if (is_page( '4239' ) || '4239' == $post->post_parent) {


 $children = wp_list_pages("title_li=&child_of=4239&echo=0&depth=1");

  if ($children) {


  $pageArray = explode("</li>",$children);
  $pageCount = count($pageArray) -1;
  $pageColumns = round($pageCount /2);

  for ($i=0;$i<$pageCount;$i++) {
  		if ($i<$pageColumns){
  			$pageLeft = $pageLeft.''.$pageArray[$i].'</li>';
  	         }
  		elseif ($i>=$pageColumns){
  			$pageRight = $pageRight.''.$pageArray[$i].'</li>';
  		 }
	};




  ?>



<div class="svcdesriptions">
<h3 class="menu-actions-label"><?php _e("Faculty Service Descriptions"); ?></h3>
<div class=sublist>


  <div class="servicesleft">
  <ul><?php echo $pageLeft; ?></ul></div>

  <div class="servicesright">
  <ul><?php echo $pageRight; ?></ul></div>
  </div><!-- end div sublist -->
  </div><!-- end div svcdescriptions-->
  <?php }} ?>




<div class="mainpost">
<?php $titlename=the_title('','',false); ?>
<h1><?php if (!is_page('4239')) echo $titlename; ?></h1>

					<?php the_content(__('Read more', 'notesblog')); ?>


</div><!-- end div mainpost -->
</div><!-- end div entry -->


				<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
			</div> <!-- end div post-# -->







		<?php endwhile; ?>

	<?php endif; ?>

	</div><!-- end div content -->
	</div><!-- end div maincontent -->

<div id="leftsidebarnormal"><?php get_sidebar('left'); ?></div>
<?php /* get_sidebar('right');*/ ?>
<?php get_footer(); ?>