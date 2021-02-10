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
                <p class="bodyTextFormat">You can use this page to contact XCC. The second form can be used to contact a Project Leader (comming soon).<br/><br/></p>
                <form id="mainContact" action="/mainContact.php" method="post" target = "_blank">

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
          </html>