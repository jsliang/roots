<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post();  ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<time class="updated" datetime="<?php the_time('c'); ?>" pubdate><?php the_time('Y-m-d') ?> <?php the_time() ?></time>
            <?php if (get_option('roots_post_author') == 'checked') { ?>
            <p class="byline author vcard">
                by <span class="fn"><?php the_author(); ?></span>
            </p>
            <?php } ?>
			<?php if (get_option('roots_post_tweet') == 'checked') { ?>
			<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
			<?php } ?>
		</header>
		<div class="entry-content">
			<?php the_content('<p>More &raquo;</p>'); ?>
		</div>
		<footer>
			<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>' )); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php comments_template(); ?>
	</article>
<?php
    if (($wp_query->current_post + 1) < ($wp_query->post_count)) {
        echo '<hr/>';
    }
?>
<?php endwhile; // End the loop ?>

