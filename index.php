<?php get_header(); ?>


<div class="row">
	<div class="eight columns">	
		<div id="content">
			<?php if ( have_posts() ) : ?>
				<div class="row">
				<h3>Latest Posts</h3>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="twelve columns">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<?php the_excerpt(); ?>
						</div>
					<?php endwhile; ?>
				</div>
				<?php else : ?>
					<p>No post found</p>
			<?php endif; ?>
		</div>
	</div>

	<div class="four columns">
		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>