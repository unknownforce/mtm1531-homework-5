<?php
	require_once 'db.php';
	
	$results = $db->query('
		SELECT id, movietitle, releasedate, director FROM movies
		ORDER BY movietitle ASC
	
	');
	
	
?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>MTM1531 Homework 5</title>
	<link href="css/general.css" rel="stylesheet">
	
</head>

<body>
	<ol>
		<?php foreach($results as $movies) : ?>
			<li><strong><a href="single.php?id=<?php echo $movies['id']; ?>"><?php echo $movies['movietitle']; ?></a></strong></li>
			<p class="delete"><a href="delete.php?id=<?php echo $movies['id']; ?>">Delete</a></p>
		<?php endforeach; ?>
	</ol>

</body>
</html>