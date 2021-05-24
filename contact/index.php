<head>
  <title>Xavier Coding Club</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"/>
  <link href="/index.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="images/elogo_1.png">
</head>

<body>
  <script src="/utils.js"></script>
  <?php
  $menu = fopen("../menu.html", "r") or die("ERROR! UNABLE TO OPEN MENU FILE");
  echo fread($menu, filesize("../menu.html"));
  fclose($menu);
  ?>
  <div class="content" id="contact">
    <h1 class="textTitle">Contact Us</h1>
      <div class=bodyText>
        <p class="bodyTextFormat">You can use this page to contact XCC. The second form can be used to contact a Project Leader (coming soon).<br/><br/></p>
        <form id="mainContact" action="contact/mainContact.php" method="post" target = "_blank">
          <label for="name" class="formTextFormat">Full Name</label><br>
          <input type="text" id="name" name="name" style="width:300; height:30" required><br><br>
          <label for="email" class="formTextFormat">Email Address</label><br>
          <input type="email" id="email" name="email" style="width:300; height:30" required><br><br>
          <label for="query" class="formTextFormat">What is your Query?</label><br>
          <textarea name="query" form="mainContact" style="width:500; height:200">Enter text here...</textarea><br><br>
          <input type="submit" value="Submit"><br>
        </form>
      </div>
  </div>
</body>
