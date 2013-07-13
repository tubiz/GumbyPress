<?php get_header(); ?>


<div class="row">
	<div class="eight columns">	
		<div id="content">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="twelve columns">
						<h4><?php the_title(); ?></h4>
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>

	<div class="four columns">
		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>