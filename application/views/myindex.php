<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hello, world!</title>
</head>
<body>
	<?php foreach ($users as $news_item): ?>

	<h2><?php echo $news_item['user_id'] ?></h2>
	<div id="main">
		<?php echo $news_item['user_name'] ?>
	</div>
	<p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>

	<?php endforeach ?>
</body>
</html>