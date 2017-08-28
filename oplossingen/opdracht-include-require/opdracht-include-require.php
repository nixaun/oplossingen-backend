<?php
	
	$articles = array(
		array(	'title'	=> 'Title article 1',
				'body' 	=> 'Body article 1',
				'tags' 	=> 'tags article 1',
		),
		array(	'title'	=> 'Titel article 2',
				'body' 	=> 'Body article 2',
				'tags' 	=> 'tags article 2',
		),
		array(	'title'	=> 'Titel article 3',
				'body' 	=> 'Body article 3',
				'tags' 	=> 'tags article 3',
		)
	);

	if(isset($_GET['article'])){
		$article = $articles[$_GET['article']];
	}
//alle includes om samen te voegen
	include 'view/header.html';
	if(isset($_GET['article'])){
		include 'view/article.html';
	} else {
		include 'view/articles.html';
	}
	include 'view/footer.html';
?>