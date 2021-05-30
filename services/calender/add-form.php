<head>
  <title>Xavier Coding Club</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet" />
  <link href="../../index.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="../../images/elogo_1.png">







</head>



<body>
  <?php
  $menu = fopen("menu.html", "r") or die("ERROR! UNABLE TO OPEN MENU FILE");
  echo fread($menu, filesize("menu.html"));
  fclose($menu);
  ?>

  <div class="content">
    <form action="/action_page.php" method="post">
      <label for="name">Name of the event</lable><br>
        <input type="text" id="fname" name="fname" value="Name of Event"><br>
        <label for="start"> date:</label>
        <input type="date" id="date" name="trip-start" value="2021-01-01" min="2018-01-01" max="2030-12-31">
        <br>
        <label for="time"> What time is it?</label>
        <input type="time" id="time" name="time" min="00:01" max="18:00" required>
        <br>
        <input type="submit" value="Send" class="submit">


    </form>
  </div>

</body>