<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content_top"></div>
<div id="content">
  <h2 class="entry-title"><?php the_title() ?></h2>
  <?php the_content(); ?>
  <ul id="archives-page" class="xoxo">
    <li id="category-archives">
    <h3>Archives by Category</h3>
  <ul>
    <?php wp_list_categories('optioncount=1&title_li=&show_count=1') ?>  
  </ul>  
   </li>  
<li id="monthly-archives">  
 <h3>Archives by Month</h3>  
 <ul>  
    <?php wp_get_archives('type=monthly&show_post_count=1') ?>  
 </ul>  
</li>  
</ul>  
</div>
<div id="content_bottom"></div>
<?php get_footer(); ?>
