<?php
get_header();
?>
    
    
		<article class="content px-3 py-5 p-md-5">
		
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="meta">Written by: <?php the_author(); ?> on <?php the_date('F j, Y'); ?></div>
			<?php get_template_part('template-parts/content', 'archive');?>
			
			</div>
		
		<?php endwhile; ?>
		<?php comments_template(); ?>	
	<?php else : ?>
		<?php echo wpautop('Sorry, no posts found!'); ?>
	
	<?php endif; ?>
	
	<?php the_posts_pagination(); ?>
	    
	    </article>
		
		
	    
    
<?php
get_footer();
?>
