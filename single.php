<?php get_header(); ?>


<div class="row">
	<div class="eight columns">	
		<div id="content" <?php post_class('home-post'); ?>>
			<?php while ( have_posts() ) : the_post(); ?>
				<h3 class="post-title"><?php the_title( '<i class="icon-video"></i> ', ' <i class="icon-video"></i>', true )?></h3>			
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>	
	
	<div class="four columns">
		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>