<head>
	<
</head>

<style>
</style>

<body>
	<h1>XCC Website</h1>
	<h2>Personal Pages</h2>

	<?php

	// Directory all the pages will be on, then scans and sorts it
	$dir    = 'personal-pages';
	$pages = scandir($dir, 1);
	
	// Prints them out, will remove in future
	print_r($pages);
	print_r($pages);


	// Gives you links to them
	//Goes through the array minus the last to elements since those lead to the directory and not an actual page
	for($i = 0; $i < count($pages) - 2; $i += 1)
	{
		echo '<a href="personal-pages/',$pages[$i], '"> sadasd</a>';
	}
	?>
</body>