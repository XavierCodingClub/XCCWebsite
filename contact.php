<!--
 Created on Mon Jan 04 2021
 Created by: Luke Sequeira
 Title: XCC Website contact page

 Copyright (c) 2021
-->



<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>XCC | Contact</title>
            <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="styles.css">
            <style>
              /*
                Figma Background for illustrative/preview purposes only.
                You can remove this style tag with no consequence
              */
              body {background: #4068B2;}
            </style>
          
          </head>
          
          <body style="overflow:hidden">

            <script src="utils.js"></script>

            <!-- Menu -->
            <div id="menuBar">
              <span id="menuTitle" onmouseover="MenuHoverOn(this, document.getElementById('homeImage'))" onmouseout="MenuHoverOff(this, document.getElementById('homeImage'))" onmousedown="MenuItemClick('index.html')">XCC</span>
              <div id="homeImage" onmouseover="MenuHoverOn(document.getElementById('menuTitle'), this)" onmouseout="MenuHoverOff(document.getElementById('menuTitle'), this)" onmousedown="MenuItemClick('index.html')"></div>
              <span id="About" onmouseover="MenuHoverOn(this)" onmouseout="MenuHoverOff(this)" onmousedown="MenuItemClick('about.html')">About us</span>
              <span id="Contacts" onmouseover="MenuHoverOn(this)" onmouseout="MenuHoverOff(this)" onmousedown="MenuItemClick('contact.php')">Contact Us</span>
              <span id="Projects" onmouseover="MenuHoverOn(this)" onmouseout="MenuHoverOff(this)" onmousedown="MenuItemClick('projects.php')">Projects</span>
              <div id="topLogo"></div>
              <!--<div id="e1_24"></div> This is the insta logo-->
            </div>

            <div id="backgroundImage"></div>
            <div id="bottomImage"></div>

            <div id="mainText">
              <span class="textTitle">Contact Us</span>
              <div class=bodyText>
                <p class="bodyTextFormat">Below are some of the links you can use to contact XCC. <br/><br/>test@gmail.com<br/><br/> <b>Form</b></p>
                <?php
                
                    echo "<p class='bodyTextFormat'>test<p>";
                
                ?>
              </div>
            </div>

          </body>
          </html>