<div class="catfish__panel catfish__comments">
	<a href="#reply-title" title="What do you think?">
		<i class="fa fa-commenting-o" aria-hidden="true">
			<span class="screen-reader-text">What do you think?</span>
		</i>
	</a>
	<?php if ( have_comments() ) : ?>
	<a href="#comments" title="View comments">
		<i class="fa fa-comments" aria-hidden="true">
			<span class="screen-reader-text">View Comments</span>
		</i> <?php echo get_comments_number(); ?>
	</a>
	<?php endif; ?>
</div>
