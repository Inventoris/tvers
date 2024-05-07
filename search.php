<?php
get_header();

$posts = get_posts( [
	'numberposts' => 6,
	's' => get_search_query()
] );

$posts_count = count( $posts );
?>
<div class="search-page case">
	<div class="container">
		<div class="search-page__wrapper">
			<?php if ( $posts ) { ?>
				<div class="search-page__data content-case">
					<h1 class="search-page__title title"><?php echo get_search_query(); ?></h1>
					<p class="search-page__posts-count">Результатов: <?php echo $posts_count; ?></p>
				</div>
				<div class="search-page__post-list post-list">
					<?php
					global $post;

					foreach ( $posts as $post ) {
						setup_postdata( $post );
						?>
						<?php get_template_part( 'template-parts/post-item' ) ?>
						<?php
					}

					wp_reset_postdata();
					?>
				</div>
			<?php } else { ?>
				<h1 class="search-page__title_not-found content-case title">Ничего не нашлось, но есть другое</h1>
				<?php
				echo do_shortcode( '[ajax_load_more container_type="div" css_classes="search-page__ajax" post_type="post" posts_per_page="3" pause="true" images_loaded="true" scroll="false" button_label="Показать другое" button_loading_label="Загрузка" button_done_label="Посты закончились"]' );
				?>
			<?php } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
