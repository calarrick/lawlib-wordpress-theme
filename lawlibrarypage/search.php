

<?php
/* Template Name: Search Results */


$search_refer = $_GET["post_type"];
if ($search_refer == 'library_database') { load_template(TEMPLATEPATH . '/dbfindersearch.php'); }
else { load_template(TEMPLATEPATH . '/sitesearch.php'); };
?>