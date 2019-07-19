<div class="page-title">
	<h2 class="container"><?= $title ?></h2>
</div>
<div class="container">


	<?php foreach($posts as $post): ?>
		<h3><a href="<?php echo site_url('/posts/'.$post['slug']); ?>"><?php echo $post['title']; ?></a></h3>
		<small class="post-meta">Posted on: <?php echo $post['created_at']; ?></small>
		<small class="post-meta">Author: <?php echo $post['author']; ?></small>
		<br/>
		<?php echo $post['content']; ?>
		<br/><br/>
		<p><a class="btn btn-sm btn-info" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>

	<?php endforeach; ?>
</div>