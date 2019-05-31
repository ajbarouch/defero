<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url(); ?>, small], [<?php the_post_thumbnail_url(); ?>, medium], [<?php the_post_thumbnail_url(); ?>, large], [<?php the_post_thumbnail_url(); ?>, xlarge]">
	</header>
<?php endif;
