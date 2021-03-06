<?php
/**
 * Buddypress Template
 */
get_header(); ?>
<div class="container slider-cont"> 
  <div class="row">
  
  
<!-- FROM /partials/content-page -->

<?php
/**
 * The template used for displaying page content in page.php
 */
?>

<div class="span12">
<div class="row">
<section>

<?php wp_reset_query();?>

<div class="span3">
<div class="row">
<div class="span3">
	
<?php dynamic_sidebar("Buddypress Sidebar One"); ?>

</div>
</div>
</div>



<div class="span6" id="blog_page">
<div class="row">


 <?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                 

	<div class="span6">
    
    
    <h1 class="post-title entry-title" itemprop="name"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'csc-themewp' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>


<?php  
the_content();
?>
	</div><!-- .entry-content -->

		<?php edit_post_link( __( 'Edit', 'csc-themewp' ), '<span class="edit-link">', '</span>' ); ?>
    
</article><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; // end of the loop. ?>

</div>
</div>

<?php wp_reset_query();?>



<div class="span3">
<div class="row">
<div class="span3">

<?php dynamic_sidebar("Buddypress Sidebar Two"); ?>

</div>
</div>
</div>

</section>
</div>
</div>
<!-- END partials/content-page -->



		
<?php get_footer(); ?>