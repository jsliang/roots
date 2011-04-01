<?php get_header(); ?>
		<div id="content" class="span-24">	
			<aside id="sidebar" class="<?php echo get_option('roots_sidebar_class'); ?>" role="complementary">
				<div class="container">
					<?php get_sidebar(); ?>
				</div>
			</aside><!-- /#sidebar -->
			<div id="main" class="<?php echo get_option('roots_main_class'); ?>" role="main">
				<div class="container">
					<h1><?php single_cat_title(); ?></h1>
					<hr/>
					<?php get_template_part('loop', 'single'); ?>
				</div>
			</div><!-- /#main -->
		</div><!-- /#content -->
<?php posts_nav_link(); ?>
<?php get_footer(); ?>
