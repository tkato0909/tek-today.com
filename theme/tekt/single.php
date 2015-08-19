<!doctype html>
<html>
<?php get_header()?>
<div id="visual_main">
  <div class="visual_banner">
        <?php if (has_post_thumbnail() ) {
  	    the_post_thumbnail();
        } ?>
  </div>
</div>
<div class="middle_wrapper">
<div id="single_content" class="content">
  <div id="recent_post">
    <div style="position: relative; left: -50%; border:">

  <?php while(have_posts()): the_post()?>
    <p id="single_title"><?php the_title()?></p>

  </div>
  </div>
    <p id="single_subtitle"><?php the_subtitle()?></p>
<div id="single_utility">
<span class="author vcard">
  <a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'hbd-theme' ), $authordata->display_name ); ?>">
    By <?php the_author(); ?></a>
</span>
|&nbsp
<span class="entry-date">
  <abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?>
  </abbr>
</span>
</div>

<div id="single_category"><p>Posted in: <?php the_category(', '); ?></p></div>
  <?php the_content(__('Continue Reading'));?>
  <?php endwhile;?>
  <h3>Comments</h3>

  <?php comments_template('',true);?>
</div>
</div>
<?php get_sidebar('tekt'); ?>
<?php get_footer()?>
<?php wpb_set_post_views(get_the_ID());?>
<?php wpb_get_post_views(get_the_ID());?>
</html>