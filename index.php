<head>
	<link rel="shortcut icon" type="image" href="images/elogo_1.png" />
	<title>XCC Website</title>
</head>

<style>
	h1 {
		text-align: center;
		font-size: 40;
	}

	h2 {
		text-align: center;
	}

	a {
		font-size: 20;
	}
</style>

<body>
	<h1>XCC Website</h1>
	<p> The somewhat offical website for XCC </p>
	<hr>

	<h2>Personal Pages</h2>

	<hr>
	<?php

	// Directory all the pages will be on, then scans and sorts it
	$dir    = 'personal-pages';
	$pages = scandir($dir, 1);

	// Prints them out, will remove in future
	// print_r($pages);
	// print_r($pages);

	// Gives you links to them
	//Goes through the array minus the last to elements since those lead to the directory and not an actual page
	for ($i = 0; $i < count($pages) - 2; $i += 1) {
		echo '<a href="personal-pages/', $pages[$i], '">', $pages[$i], '</a><br>';
	}
	?>


	<h2> MORE CONTENT COMING SOON </h2>
</body>