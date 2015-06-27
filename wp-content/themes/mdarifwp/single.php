<?php get_header(); the_post();?>

<?php get_sidebar(); ?>

<div id="content">
    <div id="contheader">
        <h2>Welcome to my Site</h2>
    </div>		
    <div id="content2">
        
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
			<?php include (TEMPLATEPATH . '/include/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php echo comments_template();/*disqus_embed('Arif2009');*/?>
        
    </div><!-- content2 -->
</div><!-- content -->

<?php get_footer(); ?>