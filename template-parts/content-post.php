<article id="post-<?php the_ID(); ?>" <?php post_class('related-posts__item'); ?>>
	<div class="entry-thumbnail">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
	</div>
	<div class="entry-content">
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<div class="entry-excerpt"><?php the_excerpt( );?></div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->