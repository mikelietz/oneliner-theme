<article id="post-<?php echo $content->id; ?>" class="post" itemscope itemtype="http://schema.org/URL">

		<span itemprop="name"><a name="<?php echo $content->permalink; ?>" itemprop="url"><?php echo $content->title_out; ?></a></span>
		<span class="content" itemprop="articleBody"><a href="<?php echo $content->content; ?>">(<?php echo $content->info->link_text; ?>)</a></span>

	<?php
/* // uncomment this and what follows to display a comment form.

if($request->display_entry): ?>
	<section class="comments" itemprop="comment">
		<h1 id="comments">Comments</h1>
		<?php foreach($content->comments->moderated->comments as $comment): ?>
			<?php echo $theme->content($comment); ?>
		<?php endforeach; ?>
		<?php $post->comment_form()->out(); ?>
	</section>
	<?php endif;

*/ ?>
</article>
