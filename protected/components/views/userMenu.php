<ul>
	<li><?php echo CHtml::link('Create New Category',array('category/create')); ?></li>
	<li><?php echo CHtml::link('Manage Categories',array('category/admin')); ?></li>

	<li><?php echo CHtml::link('Create New Post',array('post/create')); ?></li>
	<li><?php echo CHtml::link('Manage Posts',array('post/admin')); ?></li>
	<li><?php echo CHtml::link('Approve Comments',array('comment/index')) . ' (' . Comment::model()->pendingCommentCount . ')'; ?></li>
	<li><?php echo CHtml::link('Logout',array('site/logout')); ?></li>
</ul>