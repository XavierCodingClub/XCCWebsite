<head>
  <title>Xavier Coding Club</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap"
    rel="stylesheet"
  />
  <link href="/index.css" rel="stylesheet" type="text/css"/>
  <link rel="icon" href="/images/elogo_1.png">
</head>

<body>
  <script src="/utils.js"></script>
  <?php
  $menu = fopen("../menu.html", "r") or die("ERROR! UNABLE TO OPEN MENU FILE");
  echo fread($menu, filesize("../menu.html"));
  fclose($menu);
  ?>
  <div class="content">
    <h1>Welcome to the Projects page</h1>
    <p>Here are just some of the projects that out very own members have been working on!</p>
    <h1>Projects</h1>
    <div id="container">
      <div class="project" id="ptemplate">
        <div id="titleblock">
          <h2>Title</h2>
          <div id="linkline">
            <img id="instagram" class="linkicon" src="/images/logos/instagram.png" alt="">
            <img id="github" class="linkicon" src="/images/logos/github.png" alt="">
          </div>
        </div>
        <p class="project_description">Description</p>
      </div>
    </div>
    <p>Interested in leading your own project? Members can fill in a form proposing their project's goal and timeline. If enough members within XCC are interested, we'll give you the go-ahead to get started!</p>
  </div>
  <script src="/projects/script.js"></script>
</body>
