<!DOCTYPE html>
<html>
<head>
<title>03</title>
<meta charset="UTF-8">
<style>
	aside {
		background: lightblue;
		border: 1px solid black;
		border-radius: 15px;
		margin: 5px 0;
		padding: 0 10px;
		width: 200px;
	}
	aside a {
		color: inherit;
	}
</style>
</head>
<body>
	<form method="post">
	<label>Categories:</label>
	<input type="text" name="categories"/><br>
	<label>Tags:</label>
	<input type="text" name="tags"/><br>
	<label>Months:</label>
	<input type="text" name="months"/><br>
	<input type="submit" value="Generate"/>
	</form>
<?php if (isset($_POST['categories'])) : ?>
	<aside>
	<h2>Categories</h2>
	<ul>
<?php foreach (explode(', ', $_POST['categories']) as $category) : ?>
	<li><a href="#"><?=$category ?></a></li>
<?php endforeach; ?>
	</ul>
	</aside>
<?php endif; ?>
<?php if (isset($_POST['tags'])) : ?>
	<aside>
	<h2>Tags</h2>
	<ul>
<?php foreach (explode(', ', $_POST['tags']) as $tag) : ?>
	<li><a href="#"><?=$tag ?></a></li>
<?php endforeach; ?>
	</ul>
	</aside>
<?php endif; ?>
<?php if (isset($_POST['months'])) : ?>
	<aside>
	<h2>Months</h2>
	<ul>
<?php foreach (explode(', ', $_POST['months']) as $month) : ?>
	<li><a href="#"><?=$month ?></a></li>
<?php endforeach; ?>
	</ul>
	</aside>
<?php endif; ?>
</body>
</html>