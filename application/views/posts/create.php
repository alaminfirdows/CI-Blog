<div class="page-title">
	<h2 class="container"><?= $title; ?></h2>
</div>
<div class="container">


	<?php echo form_open('posts/create'); ?>
	<?php echo validation_errors(); ?>
		<label for="title">Post Title</label>
		<input type="text" id="title" name="title" class="form-control" />

		<label for="author">Post Author</label>
		<input type="text" id="author" name="author" class="form-control" />

		<label for="content">Post Content</label>
		<textarea id="content" name="content" class="form-control"></textarea>

		<input type="submit" class="btn sm btn-dark btn-block mt-2">
	</form>
	
</div>