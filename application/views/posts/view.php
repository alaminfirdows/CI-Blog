<div class="page-title">
	<h2 class="container"><?= $post['title']; ?></h2>
</div>
<div class="container">
	<small class="post-meta">Posted on: <?php echo $post['created_at']; ?></small>
	<small class="post-meta">Author: <?php echo $post['author']; ?></small>
	<br/>
	<?php echo $post['content']; ?>
	<br/><br/>
	<p><a class="btn btn-sm btn-info" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Delete</a></p>
</div>