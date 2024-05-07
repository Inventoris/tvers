<?php
get_header();
$last_posts = get_posts( [
	'numberposts' => 3,
	'post_type' => 'post',
	'orderby' => 'date',
	'order' => 'DESC'
] );
?>
<div class="not-found case">
	<div class="container">
		<div class="not-found__notification content-case">
			<h1 class="not-found__title title">Упс, ничего не нашлось...</h1>
			<p class="not-found__excerpt">Взгляните на наши последние материалы ниже</p>
		</div>
		<h2 class="not-found__suggestions-title title">Актуально:</h2>
		<div class="not-found__suggestions post-list">
			<?php
			global $post;

			foreach ( $last_posts as $post ) {
				setup_postdata( $post );
				?>
				<?php get_template_part( 'template-parts/post-item' ) ?>
				<?php
			}

			wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
