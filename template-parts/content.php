<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vape
 */
$category_detail = get_the_category();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-content__item' ); ?>>
	<div class="entry-content">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry-date">
			<ul>
				<?php foreach ( $category_detail as $category ) : ?>
				<li><a href="<?= get_category_link( $category->term_id )?>"><?= $category->name;?></a></li>
				<?php endforeach; ?>
			</ul>
			<p class="date"><?= get_the_date( 'd/m/Y' );?></p>
		</div>
		<div class="entry-excerpt"><?php the_excerpt(); ?></div>
	</div>
	<div class="entry-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
