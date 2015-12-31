<?php /* Template Name: Librarian Profile */ ?>

<?php get_header(); ?>




        <div id="maincontent">
        <div id="corecontent" class="widecolumn">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>





				<div class="entry"><h3>Our Librarians</h3>


<?php

  $children = wp_list_pages("child_of=95&title_li=&echo=0&depth=1");

  ?>


  <?php
  				/* Code to render the list of sub-pages in a multi-column format. Thanks to wordimpressed.com for model and example */

  				$pageArray = explode ("</li>",$children);
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



<div class="profilestoc">

  <div class="leftlist">
				<ul>
					<?php echo $pageLeft; ?>
					</ul></div><!-- end div leftlist -->

				<div class="middlelist">
				<ul>
					<?php echo $pageMiddle; ?>
					</ul></div><!-- end div middlelist -->

				<div class="rightlist">
				<ul>
				    <?php echo $pageRight; ?>
				    </ul></div><!-- end div rightlist -->
				    </div><!-- end div profilestoc -->
<div class="mainpost">




<?php if( !is_page(95)) { ?><h1><?php the_title(); ?></h1><?php } ?>

<h4><?php $title = get_post_meta($post->ID, 'Job Title', true);
echo $title; ?></h4>
<div class="librariancontact"><ul>
<?php $phone = get_post_meta($post->ID, 'Phone:', true); 
if( !is_page(95)) { ?><li><strong><?php _e("Phone: "); ?></strong><?php 
echo $phone; ?></li><?php }; ?>
<?php $email = get_post_meta($post->ID, 'Email:', true);
if( !is_page(95)) { ?><li><strong><?php _e("Email: "); ?></strong><?php 
echo "<a href="; echo "mailto:$email"; echo ">"; echo $email; ?></a></li><?php }; ?>
<?php $web = get_post_meta($post->ID, 'Web:', true);
if( !is_page(95)) { ?><li><strong><?php _e("Web: "); ?></strong><?php 
echo $web; ?> </li><?php }; ?>









</ul></div>




  					<?php the_content(__('Read more', 'notesblog')); ?>

  </div><!-- end div mainpost -->
  
  
  
  
  
  
  </div><!-- end div entry -->

  
  
  				<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
  			</div> <!-- end div post-# -->


  		<?php endwhile; ?>

  	<?php endif; ?>

  	</div><!-- end div corecontent -->
  	</div><!-- end div maincontent -->

  <div id="leftsidebarnormal"><?php get_sidebar('left'); ?></div>
  <?php /* get_sidebar('right');*/ ?>
<?php get_footer(); ?>