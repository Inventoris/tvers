<?php
get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<article class="article-page case padding-top">
			<div class="container">
				<div class="article-page__header">
					<?php if ( ! get_field( 'hide_post_thumbnail' ) ) : ?>
						<?php the_post_thumbnail(); ?>
					<?php endif; ?>
					<div class="category-and-tags">
						<object class="category">
							<?php the_category( ' ' ); ?>
						</object>
						<?php if ( has_tag() ) { ?>
							<object class="tags">
								<?php the_tags( '#', '#' ); ?>
							</object>
						<?php } ?>
					</div>
				</div>
				<div class="article-page__body">
					<h1 class="article-page__title title"><?php the_title(); ?></h1>
					<p class="article-page__description"><?php echo get_the_excerpt(); ?></p>
					<?php the_content(); ?>
				</div>
			</div>
		</article>
		<?php
	}
}
get_footer();
?>
