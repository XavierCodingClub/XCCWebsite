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
	<header class="bar">
    <img class="home" src="/images/elogo_1.png" onclick="window.location = '/'"></img>
    <h1 id="XCC">XCC</h1>
    <div class="vl"></div>
    <div class="top2">
      <a class="top_bar" onmouseover="MenuHoverOn(this)" onmouseout="MenuHoverOff(this)" href="/projects">Projects</a>
      <a class="top_bar" onmouseover="MenuHoverOn(this)" onmouseout="MenuHoverOff(this)" href="about.php">About us</a>
      <a class="top_bar" onmouseover="MenuHoverOn(this)" onmouseout="MenuHoverOff(this)" href="/contact">Contact</a>
    </div>
  </header>
  <div class="content">
    <h1>Welcome to XCC</h1>
    <p>
This is the main page when it comes to all things programming <br>
Feek free to look around <br>
Our club is open to any new members. Feel free to drop in whenever we have a meet (Tuesday @2:35pm)<br>
Join out google classroom! (Class code is: n242i2g)<br>
<a href=contact class=bodyText onmouseover="MenuHoverOn(this)" onmouseout="MenuHoverOff(this)"><u>Contact us here</u></a> or check out our Instagram @fxcodingclub <br>
</p>





    
    </h3>
    <div class="calander">
      <h1 class="month">
      <?php
        echo DateTime::createFromFormat('!m', $month)->format("F")
      ?>
      </h1>
      <ul class="weekdays">
        <li>Monday</li>
        <li>Tuesday</li>
        <li>Wednesday</li>
        <li>Thursday</li>
        <li>Friday</li>
        <li>Saturday</li>
        <li>Sunday</li>
      </ul>

      <ul class="days"> 
        <?php

          $count = cal_days_in_month(CAL_GREGORIAN, $month, $year);
          function getWeekday($date) {
            return date('w', strtotime($date));
          }
          $offset = getWeekday(sprintf("%d-%d-%d", $year, $month, 1));
          
          for ($i = 0; $i < $offset-1; $i++) {
            echo("<li style='opacity:0;'>" . $i . "</li>");
          }

          for ($i = 1; $i <= $count; $i++) {
            echo("<li>" . $i . "</li>");
          }
        ?>
      </ul>
    </div>
  </div>
</body>
