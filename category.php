<?php
get_header();
$taxonomy = get_queried_object();
$taxomomy_id = $taxonomy->term_id;
$taxomomy_slug = $taxonomy->slug;

$category_posts = get_posts( [
	'numberposts' => 3,
	'category' => $taxomomy_id,
	'post_type' => 'post'
] );

$current_posts_id = array();

foreach ( $category_posts as $post ) {
	setup_postdata( $post );
	$current_posts_id[] = $post->ID;
}

wp_reset_postdata();

$exclude_posts = ( $current_posts_id ) ? implode( ',', $current_posts_id ) : '';
?>
<div class="taxonomy category case">
	<div class="container">
		<div class="taxonomy__wrapper">
			<h1 class="taxonomy__title content-case title"><?php single_cat_title(); ?></h1>
			<div class="taxonomy__post-list post-list">
				<?php
				global $post;

				foreach ( $category_posts as $post ) {
					setup_postdata( $post );
					?>
					<?php get_template_part( 'template-parts/post-item' ) ?>
					<?php
				}

				wp_reset_postdata();
				?>

				<?php
				echo do_shortcode( '[ajax_load_more container_type="div" css_classes="taxonomy__ajax" post_type="post"  category="' . $taxomomy_slug . '" post__not_in="' . $exclude_posts . '" posts_per_page="3" pause="true" images_loaded="true" scroll="false" button_label="Показать еще" button_loading_label="Загрузка" button_done_label="Посты закончились"]' );
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
