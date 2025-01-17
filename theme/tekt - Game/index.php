<!doctype html>
<html>
<!-- <header><link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/></header> -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65617127-1', 'auto');
  ga('send', 'pageview');

</script>

<?php get_header()?>


<meta name="google-site-verification" content="7ri-Y4bcitW5DQRbLDRIS0rjCNBb8ZLUbDyc01JnqQQ" />
<div id="visual_main">
  <div class="visual_banner">
        <?php if (has_post_thumbnail() ) {
  	    the_post_thumbnail();
        } ?>
  </div>
  <div id="recent_post">
    <div style="position: relative;">
          <h2> <?php $recent = new WP_Query("showposts=1"); while($recent->have_posts()) : $recent->the_post();?>
                   <a id ="most_recent" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                   <p id ="subtitle_banner"><?php get_the_subtitle( $post ); ?></p></li>
                   <hr id="line_banner"></hr>
                   <a href="<?php the_permalink() ?>" rel="bookmark" id ="read_more" class="btn">READ MORE</a>
               <?php endwhile; ?>
          </h2>
    </div>
  </div>
</div>


<div id="front_content" class="content">
  <div style="margin-right= 30px">
  <?php
  query_posts('offset=1');
  while ( have_posts() ) : the_post(); $postno; $postno++; $column;
  switch ($postno % 3) {
    case 0:
        $column = 3;
        break;
    case 1:
        $column = 1;
        break;
    case 2:
        $column = 2;
        break;
}?>
    <div id="<?=$postno?>"class="article">
      <div id="article-wrapper">
      <div id="article-thumb" class="column-<?=$column?>">
        <?php if ( has_post_thumbnail() ) : ?>
        	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        	<?php the_post_thumbnail('thumbnail'); ?>
        	</a>

        <?php else:?>
        <div id='empty_thumbnail'></div>
        <?php endif;?>

<div id="whitebottom">
  <a href="<?php the_permalink(); ?>" id="front-entry-title"><?php the_title(); ?></a>
  <a href="<?php the_permalink(); ?>" id="readmore_grid">Read More</a>

      <div class="clearer"></div>
    </div>
    </div>
  </div>
  				                </div><!-- #post-<?php the_ID(); ?> -->

  				<?php endwhile; ?>
          <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<hr style="background:#888; border:0; height:1px; margin-bottom:10px" />
<div id=bottom_widgets>
  <?php dynamic_sidebar( 'bottom_widget' ); ?>
</div>
</div>


<?php get_footer()?>
</html>
