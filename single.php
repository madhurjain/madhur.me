<?php 
if(!isset($_GET['ref'])){
	include (TEMPLATEPATH . '/header-alt.php');
?>
<div id="post">
<?php 
}
else{ ?>
<a href="javascript:void(0);" id="close" onClick="closePost(this);">X</a>
<?php } ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php comments_template(); ?>
	<?php endwhile; ?>
<?php
if(!isset($_GET['ref'])){
?>
</div>
<?php
	get_footer();
}
?>




