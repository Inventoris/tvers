<?php
get_header();

$posts = get_posts( [
	'numberposts' => 9,
	'post_type' => 'post'
] );

$current_posts_id = array();

foreach ( $posts as $post ) {
	setup_postdata( $post );
	$current_posts_id[] = $post->ID;
}

wp_reset_postdata();

$exclude_posts = ( $current_posts_id ) ? implode( ',', $current_posts_id ) : '';
?>
<div class="home-page case padding-top">
	<div class="container">
		<div class="home__post-list post-list">
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

			<?php
			echo do_shortcode( '[ajax_load_more container_type="div" css_classes="home__ajax" post_type="post" post__not_in="' . $exclude_posts . '" posts_per_page="6" pause="true" images_loaded="true" scroll="false" button_label="Показать еще" button_loading_label="Загрузка" button_done_label="Посты закончились"]' );
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
