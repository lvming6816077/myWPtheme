<?php get_header(); ?>
<div class="wraper">
	<div id="container">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<div class="post" id="post-<?php the_ID();?>">
				 <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				 <p class="postmetadata">
					 <span class="post-category-span"><i class="icon-bookmark"></i><?php the_category(', ') ?></span><span class="post-user-span"> <i class="icon-user"></i><?php the_author(); ?></span><span class="post-comment-span"><i class="icon-comments"></i><?php comments_popup_link('No Comments &gt;', '1 Comment &#187;', '% Comments &#187;'); ?></span>
					  <?php //edit_post_link('Edit', ' &#124; ', ''); ?>
				 </p>
				 <div class="entry"><?php the_excerpt();?></div>
				 <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
				 </div>
			<?php endwhile; ?>
			<div class="navigation">
			<?php posts_nav_link('33','33f','fff'); ?>
			</div>
		<?php endif; ?>
	</div>
	<div class="sidebar">
		<ul>
			<div id="sidebar-top">
				<?php dynamic_sidebar(); ?>
			</div>
		</ul>
	</div>
</div>
</body>

</html>