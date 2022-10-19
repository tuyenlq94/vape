<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vape
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('archive-post__item'); ?>>
	<div class="entry-content">
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<div class="entry-excerpt"><?php the_excerpt( );?></div>
	</div>
	<div class="entry-thumbnail">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
