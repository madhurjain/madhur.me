<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="post_container"><div id="post"></div></div>
<div id="container">
<div id="content">
<div id="scrolling">
	<div id="about" class="panel">
	<br/>
	<?php
		$page_id = get_page_ID( 'About' );
		 $page_data = get_page( $page_id ); 
		 $content = apply_filters('the_content', $page_data->post_content);
		 $title = $page_data->post_title;
		 echo $content;
	?>
	</div>
	<div id="projects" class="panel">
	<div id="project_posts" class="posts">
	<?php
		$cat_id = get_cat_ID( 'Projects' );
		query_posts("cat=$cat_id");
		//$ids = array();
		while (have_posts()) : the_post();
			$id = get_the_ID();
			$t = get_the_title();
			$l = get_permalink();
			// the_content();
			
			echo "<a id=\"$id\" href=\"$l\" title=\"$t\" class=\"post\">$t</a><div id=\"load_$id\" class=\"loading\"></div><br/>";
		endwhile;
	?>
	</div>
	<div id="project_post_expanded"></div>
	</div>
	<div id="random" class="panel">
	<div id="random_posts" class="posts">
	<?php
		$cat_id = get_cat_ID( 'Random' );
		query_posts("cat=$cat_id");
		while (have_posts()) : the_post();
			$id = get_the_ID();
			$t = get_the_title();
			$l = get_permalink();
			echo "<a id=\"$id\" href=\"$l\" title=\"$t\" class=\"post\">$t</a><div id=\"load_$id\" class=\"loading\"></div><br/>";
		endwhile;
	?>
	</div>
	<div id="random_post_expanded"></div>
	</div>
	<div id="contact" class="panel">
	<p>
	<?php
		$page = get_page_by_title( 'Contact' );
		$content = apply_filters('the_content', $page->post_content);
		$title = $page->post_title;
		echo $content;
	?>
	</p>
	</div>
</div>
</div>
</div>
<script type="text/javascript">
	scrollTo(2);
</script>
<?php get_footer(); ?>
