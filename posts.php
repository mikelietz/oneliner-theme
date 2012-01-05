<?php foreach($posts as $post) echo $theme->content($post); ?>
<div class="pagenav">
	<?php echo $theme->prev_page_link( '&laquo;&nbsp;Newer' ); ?>
	<?php echo $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2, 'hideIfSinglePage' => true ) ); ?>
	<?php echo $theme->next_page_link( 'Older&nbsp;&raquo;' ); ?>
</div>
