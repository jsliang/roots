<?php get_header(); ?>
		<div id="content" class="<?php echo roots_container_class; ?>">	
			<div id="main" class="<?php echo get_option('roots_main_class'); ?>" role="main">
				<div class="container">
                    <?php /* If this is a category archive */ if (is_category()) { ?>
                    <h1>Category: <?php single_cat_title(); ?></h1>
                    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    <h1>Tag: <?php single_tag_title(); ?></h1>
                    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    <h1>Archive for <?php the_time('Y-m-d'); ?></h1>
                    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    <h1>Archive for <?php the_time('F, Y'); ?></h1>
                    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    <h1>Archive for <?php the_time('Y'); ?></h1>
                    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    <h1>Archive by Autor</h1>
                    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <h1>Archive of Blogs</h1>
                    <?php } ?>
					<?php get_template_part('loop', 'single'); ?>
				</div>
                <?php if ($wp_query->max_num_pages > 1) : ?>
                    <nav id="post-nav">
                        <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'roots' ) ); ?></div>
                        <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'roots' ) ); ?></div>
                    </nav>
                <?php endif; ?>
			</div><!-- /#main -->
			<aside id="sidebar" class="<?php echo get_option('roots_sidebar_class'); ?>" role="complementary">
				<div class="container">
					<?php get_sidebar(); ?>
				</div>
			</aside><!-- /#sidebar -->
		</div><!-- /#content -->
<?php get_footer(); ?>
