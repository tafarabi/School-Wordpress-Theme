<?php
/*
	Template Name: Photo Gallery Layout
*/
?>



<?php get_header();?>

<h1 style="text-align:center">Photo Gallery</h1>

<?php
if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '105' ); }
?>

<?php get_footer();?>