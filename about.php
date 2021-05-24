<head>
  <title>Xavier Coding Club</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap"
    rel="stylesheet"
  />
  <link href="/index.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="images/elogo_1.png">
</head>

<body>
  <script src="/utils.js"></script>
  <?php
  $menu = fopen("menu.html", "r") or die("ERROR! UNABLE TO OPEN MENU FILE");
  echo fread($menu, filesize("menu.html"));
  fclose($menu);
  ?>
  <div class="content" id="contact">
    <h1 class="textTitle">About us</h1>
      <div class=bodyText>
<p>Xavier Coding Club (XCC) is a group of many students who are all interested in learning programming and exploring the industry itself. Ultimately, we want to set up an ecosystem of students who are all inspired in their passion for learning and learning new things</p>
<p>Since the club started in September 2020, we've had a number of meets, spanning a variety of topics from the basics of Github to exploring different education path ways in your Post-Secondary Education</p>
<p>We've also had the opportunity of having multiple guest speakers, hearing what it’s like to be in the field, first hand, and also the basics of Machine Learning from a distinguished engineer.</p>
      </div>
  </div>
  <div><a herf="services/sign-in.php">
  <p>Hi guys</p></a>

  </div>
</body>
