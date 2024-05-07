<a href="<?php the_permalink(); ?>" class="post-item">
	<div class="post-item__wrapper">
		<div class="post-item__thumbnail">
			<?php the_post_thumbnail( 'large', [ 
				'class' => 'post-item__image'
			] ); ?>
		</div>
		<div class="post-item__data">
			<div class="post-item__content">
				<h2 class="post-item__title"><?php the_title(); ?></h2>
				<p class="post-item__excerpt"><?php echo get_the_excerpt(); ?></p>
			</div>
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
	</div>
</a>
