<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vape
 */
$category_detail = get_the_category( );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('archive-post__item'); ?>>
	<div class="singlePost-content">
		<h1><?php the_title();?></h1>
		<div class="entry-date">
			<ul>
				<?php foreach($category_detail as $category ) :?>
				<li><?= $category->name;?></li>
				<?php endforeach; ?>
			</ul>
			<p class="date"><?= get_the_date('d/m/Y');?></p>
		</div>
		<div class="entry-ex"><?php the_content( );?></div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
