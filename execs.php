<head>
  <title>Xavier Coding Club</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap"
    rel="stylesheet"
  />
  <link href="/index.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="/images/elogo_1.png">
</head>

<body>
  <script src="/utils.js"></script>
  <?php
    $year = date("Y");
    $month = date("m");
  ?>
	<?php
  $menu = fopen("menu.html", "r") or die("ERROR! UNABLE TO OPEN MENU FILE");
  echo fread($menu, filesize("menu.html"));
  fclose($menu);
  ?>
  <div class="content">
    <h1>Welcome to XCC</h1>


  </div>
</body>
