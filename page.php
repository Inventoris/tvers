<?php
get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<article class="article-page case padding-top">
			<div class="container">
				<div class="article-page__body">
					<h1 class="article-page__title title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</article>
		<?php
	}
}
get_footer();
?>
