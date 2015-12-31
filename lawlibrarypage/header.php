<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://dublincore.org/documents/2008/08/04/dc-html/">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php if (is_front_page () ) { echo 'Case Western Reserve University School of Law &#8226; '; bloginfo('name'); } 
elseif (is_category() || is_tag()) { 
single_cat_title(); if ($paged>1) { 
     echo ', page ', $paged;
}; echo ' &#8226; Case Western Reserve University School of Law';} 

elseif (is_single() || is_page()) {single_post_title(); echo ' &#8226; ' ; if($post->post_parent) {
    $parent_title = get_the_title($post->post_parent);
    echo $parent_title.' &#8226; ';
};bloginfo('name'); echo ' &#8226; Case Western Reserve University School of Law';} 

elseif (is_home()) { bloginfo('name'); echo ' &#8226 '; echo ' Blog'; if ($paged>1) { 
     echo ', page ', $paged ;
}; echo ' &#8226; Case Western Reserve University School of Law'; } 
else { wp_title('',true); if ($paged>1) { 
     echo ', page ', $paged;
}; echo ' &#8226; '; bloginfo('name'); echo ' &#8226; Case Western Reserve University School of Law';} ?></title>

<?php if ( (is_home()) || (is_front_page()) ) {echo '<meta id="MetaDescription" name="DESCRIPTION" content="The Judge Ben C. Green Law Library supports the curriculum, instructional needs and programs of our law school and strives to provide outstanding service and information access to our students, faculty and staff" />';} ?>
<meta id="MetaAuthor" name="AUTHOR" content="Case Western Reserve University School of Law" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, print" />


<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/TheJudgeBenCGreenLawLibrary" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="http://law.case.edu/images/favicon.ico" />
<style type="text/css">
  input.gsc-input, .gsc-input-box, .gsc-input-box-hover, .gsc-input-box-focus {
	border-color: #d6d6d6;
  }
  input.gsc-search-button, input.gsc-search-button:hover, input.gsc-search-button:focus {
	border-color: #d6d6d6;
	background-color: #959595;
	background-image: none;
	margin-top: -1px;
	filter: none;
  }
</style>

<?php


wp_enqueue_script("jquery"); 
wp_enqueue_script('mainnavmenu', get_bloginfo('stylesheet_directory') . '/js/mainnavmenu.js', array('jquery'));
wp_enqueue_script ('menuaccordion', get_bloginfo('stylesheet_directory') . '/js/menuaccordion.js', array('jquery'));


wp_head(); ?>




</head>


<body <?php body_class(); ?>>

<div id="site">

 <!-- these areas of table-based layout need to be removed. Are present for matching against U and lawschool sites done this way, but will impede any progress toward responsive design -->
 <div class="top-bottom-row-div">
	<table cellpadding="0" cellspacing="0" border="0" id="TopRowTbl" class="template-block">
		<tr>

			<td id="TopRowTdLeft" class="top-row-td">
				<a href="http://os.lsac.org/Release/Logon/Access.aspx" target="_blank" style="margin-right: 5px;"><img src="http://lawdev1.case.edu/images/top_row_apply.gif" id="ApplyImg" alt="Apply" border="0" class="top-row-img" /></a>
				<a href="http://giving.case.edu/" target="_blank" style="margin-right: 7px;"><img src="http://lawdev1.case.edu/images/top_row_give.gif" id="GiveImg" alt="Give" border="0" class="top-row-img" /></a>
				<a href="http://law.case.edu/Admissions/VisitUs.aspx" style="margin-right: 7px;"><img src="http://lawdev1.case.edu/images/top_row_visit.gif" id="VisitImg" alt="Visit" border="0" class="top-row-img" /></a>
				<a href="http://case.edu/visit/#2/" style="margin-right: 8px;"><img src="http://lawdev1.case.edu/images/top_row_find.gif" id="FindImg" alt="Find" border="0" class="top-row-img" /></a>
				<a href="http://www.case.edu" target="_blank"><img src="http://lawdev1.case.edu/images/top_row_case.gif" id="CWRUImg" alt="case.edu" border="0" /></a>
			</td>
			<td id="TopRowTdRight" class="top-row-td" align="right">
				<a href="http://law.case.edu/Portals/0/839.xml" target="_blank" style="margin-right: 8px;"><img src="http://lawdev1.case.edu/images/top_row_rss.gif" id="RSSIcon" alt="RSS feed" border="0" class="top-row-img" /></a>

				<a href="http://www.facebook.com/pages/Cleveland-OH/Case-Western-Reserve-University-School-of-Law/192747827292#!/pages/Cleveland-OH/Case-Western-Reserve-University-School-of-Law/192747827292?ref=mf" target="_blank" style="margin-right: 9px;"><img src="http://lawdev1.case.edu/images/top_row_facebook.gif" id="FacebookIcon" alt="Find us on Facebook" border="0" class="top-row-img" /></a>
				<a href="http://www.linkedin.com/groups?gid=66257&amp;trk=anetsrch_name&amp;goback=%2Egdr_1255119327326_1" target="_blank" style="margin-right: 9px;"><img src="http://lawdev1.case.edu/images/top_row_linkedin.gif" id="LinkedInIcon" alt="LinkedIn" border="0" class="top-row-img" /></a>
				<a href="http://www.youtube.com/caseschooloflaw" target="_blank" style="margin-right: 9px;"><img src="http://lawdev1.case.edu/images/top_row_youtube.gif" id="YoutubeIcon" alt="Videos on Youtube" border="0" class="top-row-img" /></a>
				<a href="http://deimos3.apple.com/WebObjects/Core.woa/Browse/case.edu.1695151259" target="_blank" style="margin-right: 9px;"><img src="http://lawdev1.case.edu/images/top_row_itunes.gif" id="iTunesIcon" alt="Videos on iTunes" border="0" class="top-row-img" /></a>
				<a href="http://twitter.com/#!/cwru_law/" target="_blank"><img src="http://lawdev1.case.edu/images/top_row_twitter.gif" id="TwitterIcon" alt="Follow us on Twitter" border="0" class="top-row-img" /></a>

			</td>
		</tr>
	</table>
</div>





<div id="SearchForm" class="template-block" style="padding-top: 10px;">

	<div id="cse-search-form" style="width: 380px; float: right;">Loading</div>

</div>

<div id="AfterSearchForm" class="template-block" style="height: 50px; float: none;">&nbsp;</div>

<script src="http://www.google.com/jsapi" type="text/javascript"></script>


<script type="text/javascript"> 

   google.load('search', '1', {language : 'en', style : google.loader.themes.V2_DEFAULT});

  google.setOnLoadCallback(function() {

	var customSearchOptions = {};

	customSearchOptions['adoptions'] = {'layout': 'noTop'};

	var customSearchControl = new google.search.CustomSearchControl(

	  '003661879333480276050:f2md7_raqac', customSearchOptions);

	customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);

	var options = new google.search.DrawOptions();

    options.setAutoComplete(true);

    customSearchControl.setAutoCompletionId('003661879333480276050:f2md7_raqac+qptype:1');

	options.enableSearchboxOnly("http://law.case.edu/SearchResults.aspx");

	customSearchControl.draw('cse-search-form', options);

  }, true);

</script> 

<style type="text/css">

  input.gsc-input, .gsc-input-box, .gsc-input-box-hover, .gsc-input-box-focus {
	border-color: #d6d6d6;
  }
  input.gsc-search-button, input.gsc-search-button:hover, input.gsc-search-button:focus {
	border-color: #d6d6d6;
	background-color: #959595;
	background-image: none;
	margin-top: 0px;
	filter: none;
  }
</style>



<table cellpadding="0" cellspacing="0" border="0" id="LogoContactTbl" class="template-block">
	<tr>
		<td valign="top" id="LogoContactTdLeft" class="login-contact-row-td">

			<a href="http://law.case.edu"><img src="http://lawdev1.case.edu/images/logo.gif" id="LogoImg" alt="Case Western Reserve University School of Law" border="0" /></a>
		</td>
		<td valign="top" id="LogoContactTdRight" class="login-contact-row-td contact" align="right">
			<img src="http://lawdev1.case.edu/images/contact_us.gif" id="ContactUsImg" alt="Contact Us" border="0" style="margin-bottom: 4px;" /><br />
			11075 East Blvd<br />
			Cleveland, Ohio 44106<br />
			216.368.3600
		</td>

	</tr>
</table>

 <!-- these areas of table-based layout need to be removed. Are present for matching against surroundng U and lawschool sites but will impede any progress toward responsive design. Other mark up should support move to responsive designs with predominantly CSS-only approach -->

<div id="MenuDiv" class="template-block" style="padding-top: 20px;">
	
	
	<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; border-top: 1px solid #dddddd;">
		<tr>
			<td valign="top" style="width: 16%; padding-top: 15px; padding-bottom: 12px;"><!-- <a href="javascript:void(0);" onmouseover="setTimeout('sp1.showPanel(0); releasePanelHeight();', 1000); return false;"> --> <span class="show_hide law-menu-hdr-td"><a href="#">Our School</a><!-- <img src="http://law.case.edu/images/menu_our_school.gif" alt="Our School" border="0" id="MenuImgOurSchool" /> --></span></td>
			<td valign="top" style="width: 18%; padding-top: 15px; padding-bottom: 12px;"><!-- <a href="javascript:void(0);" onmouseover="setTimeout('sp1.showPanel(0); releasePanelHeight();', 1000); return false;"> --><span class="show_hide law-menu-hdr-td"><a href="#">Admissions</a><!-- <img src="http://law.case.edu/images/menu_admissions.gif" alt="Admissions" border="0" id="MenuImgAdmissions" /> --></span></td>
			<td valign="top" style="width: 16%; padding-top: 15px; padding-bottom: 12px;"><!-- <a href="javascript:void(0);" onmouseover="setTimeout('sp1.showPanel(0); releasePanelHeight();', 1000); return false;"> --><span class="show_hide law-menu-hdr-td"><a href="#">Academics</a><!-- <img src="http://law.case.edu/images/menu_academics.gif" alt="Academics" border="0" id="MenuImgAcademics" />--></span></td>
			<td valign="top" style="width: 16%; padding-top: 15px; padding-bottom: 12px;"><!-- <a href="javascript:void(0);" onmouseover="setTimeout('sp1.showPanel(0); releasePanelHeight();', 1000); return false;"> --><span class="show_hide law-menu-hdr-td"><a href="#">Student Life</a><!-- <img src="http://law.case.edu/images/menu_student_life.gif" alt="Student Life" border="0" id="MenuImgStudentLife" />--></span></td>

			<td valign="top" style="width: 16%; padding-top: 15px; padding-bottom: 12px;"><!-- <a href="javascript:void(0);" onmouseover="setTimeout('sp1.showPanel(0); releasePanelHeight();', 1000); return false;">--><span class="show_hide law-menu-hdr-td"><a href="#">Careers</a><!--<img src="http://law.case.edu/images/menu_careers.gif" alt="Careers" border="0" id="MenuImgCareers" />--></span></td>
			<td valign="top" style="width: 18%; padding-top: 15px; padding-bottom: 12px;"><!-- <a href="javascript:void(0);" onmouseover="setTimeout('sp1.showPanel(0); releasePanelHeight();', 1000); return false;">--><span class="show_hide law-menu-hdr-td"><a href="#">Alumni</a><!--<img src="http://lawdev1.case.edu/images/menu_alumni.gif" alt="Alumni" border="0" id="MenuImgAlumni" />--></span></td>
		</tr>
	</table>
	
	
	
	<div style="overflow: hidden;" id="CommonMenu" class="SlidingPanels slidingDiv">
		<div style="left: 0px; top: 0px;" class="SlidingPanelsContentGroup">
		
			<div id="MenuPanel" class="SlidingPanelsContent" style="">
				<table id="MenuPanelTable" style="width: 100%; margin-bottom: 10px;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td valign="top" style="width: 16%;" class="menu-td"><a href="http://law.case.edu/OurSchool/AboutUs.aspx">About Us</a><br/><a href="http://law.case.edu/OurSchool/FacultyStaff.aspx">Faculty &amp; Staff</a><br/><a href="http://law.case.edu/OurSchool/LawLibrary.aspx">Law Library</a><br/><a href="http://law.case.edu/OurSchool/OurNeighborhood.aspx">Our Neighborhood</a><br /><a href="http://law.case.edu/Admissions/ConsumerInformation.aspx">Consumer Information</a></td><td valign="top" style="width: 18%;" class="menu-td"><a href="http://law.case.edu/Admissions/Apply.aspx">Apply</a><br/><a href="http://law.case.edu/Admissions/Transfer.aspx">Transfer</a><br/><a href="http://law.case.edu/Admissions/FinancialAid.aspx">Financial Aid &amp; Scholarships</a><br/><a href="http://law.case.edu/Admissions/ClassProfile.aspx">Class Profile</a><br/><a href="http://law.case.edu/Admissions/LLMPrograms.aspx">LL.M. Programs</a><br/><a href="http://law.case.edu/Admissions/VisitUs.aspx">Visit Us</a><br/><a href="http://law.case.edu/Admissions/ContactUs.aspx">Contact Us</a></td><td valign="top" style="width: 16%;" class="menu-td"><a href="http://law.case.edu/Academics/JDCurriculum.aspx">JD Curriculum</a><br/><a href="http://law.case.edu/Academics/ExperientialLearning.aspx">Experiential Learning</a><br/><a href="http://law.case.edu/Academics/Concentrations.aspx">Concentrations</a><br/><a href="http://law.case.edu/Academics/DualDegrees.aspx">Dual Degrees</a><br/><a href="http://law.case.edu/Academics/AcademicCenters.aspx">Academic Centers</a><br/><a href="http://law.case.edu/Academics/AcademicCalendar.aspx">Academic Calendar</a><br/><a href="http://law.case.edu/Academics/StudyAbroad.aspx">Study Abroad</a><br/><a href="http://law.case.edu/Academics/ChinaProgram.aspx">China Program</a></td><td valign="top" style="width: 16%;" class="menu-td"><a href="http://law.case.edu/StudentLife/StudentServices.aspx">Student Services</a><br/><a href="http://law.case.edu/StudentLife/StudentOrganizations.aspx">Student Organizations</a><br/><a href="http://law.case.edu/StudentLife/Journals.aspx">Journals</a><br/><a href="http://law.case.edu/StudentLife/MootCourtMockTrial.aspx">Moot Court &amp; Mock Trial</a><br/><a href="http://law.case.edu/StudentLife/Housing.aspx">Housing</a><br/><a href="http://law.case.edu/StudentLife/StudentSpotlight.aspx">Student Spotlight</a></td><td valign="top" style="width: 16%;" class="menu-td"><a href="http://law.case.edu/CareerServices/ProspectiveStudents.aspx">For Prospective Students</a><br/><a href="http://law.case.edu/CareerServices/Students.aspx">For Students</a><br/><a href="http://law.case.edu/CareerServices/Alumni.aspx">For Alumni</a><br/><a href="http://law.case.edu/CareerServices/Employers.aspx">For Employers</a><br/><a href="http://law.case.edu/CareerServices/ContactUs.aspx">Contact Us</a></td><td valign="top" style="width: 18%;" class="menu-td"><a href="http://law.case.edu/Alumni/Events.aspx">Events</a><br/><a href="http://law.case.edu/Alumni/Reunion.aspx">Reunion</a><br/><a href="http://law.case.edu/Alumni/Giving.aspx">Giving</a><br/><a href="http://law.case.edu/Alumni/StayConnected.aspx">Stay Connected</a><br/><a href="http://law.case.edu/Alumni/ContactUs.aspx">Contact Us</a></td></tr></tbody></table>

			</div>
			
			
			
			
		</div>
	</div>
	
	
	
	

	
		<div id="CommonMenuBottom" class="template-block" style="width: 100%; height: 5px; border-bottom: 1px solid #dddddd;">&nbsp;</div>
</div>
 
 
 
 
<div id="header">
<div class="breadcrumb-div2">
<div class="breadcrumb">
	<div class="breadcrumbW">
	<div class="breadcrumbC">

	<span class="breadcrumb"><a href="http://www.law.case.edu"><?php _e("Law School Home") ?></a></span><img src="http://lawdev1.case.edu/images/breadcrumb_separator.gif" alt=">>"/><span class="section">

	<span class="breadcrumb">
	<?php
	if(function_exists('bcn_display'))
	{bcn_display();	}	?>
	</span><!-- end span breadcrumb -->


	</span> <!-- end span section -->
	</div> <!-- end div breadcrumbC -->
	</div> <!-- end div breadcrumbW -->
</div> <!-- end div breadcrumb -->
</div>




<div id="headercontent">
	<div id="title">
	 
<?php
if ( is_front_page() ) {
    $name_heading_tag = "h1";
} 
else {
    $name_heading_tag = "h2";
}

?> 
	
	
<<?php echo $name_heading_tag ?> class="librarytitle"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" ><?php bloginfo('name'); ?></a></<?php echo $name_heading_tag ?>>

</div> <!-- end div title -->



<div id="headerchatwidget"><ul>

        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('RightHead') ) : ?>
        <?php endif; ?>
               </ul></div> <!-- end div headerchatwidget -->



</div> <!-- end div headercontent -->
</div> <!-- end div header -->

<div id="navline">

<div class="navlinecontents">




<div id="navmarker">


<div class="menu_navline_wrap"><h2>Find Our: </h2><?php wp_nav_menu (array(
	'container_class' => 'menu_navline',
	'theme_location' => 'top_links')); ?>
</div>
</div>





</div> <!-- end div navlinecontents -->




</div> <!-- end div navline -->


<div id="wrap">
<div id="pagecontents">