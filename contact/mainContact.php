<!--
 * Created on Mon Jan 04 2021
 * Author: Luke Sequeira
 * Contact PHP for XCC webiste
 *
 * Copyright (c) 2021
-->


<?php
                 
                 $name = test_input($_POST['name']);
                 $email = test_input($_POST['email']);
                 $query = test_input($_POST['query']);
                 //$query = wordwrap($query, 68, "\n"); //inserts newlines every 68 charecters as required by php (php requires it every 70 chars) //do this on server, once mailto is removed
                 $recipient = "fxcodingclub@gmail.com"; //replace with desired email

                 $email_subject = "XCC Form Submition from $name";
                 $email_body = "The form on XCC's website has recieved a submision from $name \n\n $query";

                 //mail($recipient, $email_subject, $email_body); //We are using mail-to links for now

                 function test_input($data) { //remove harmful code from hackers
                   $data = trim($data);
                   $data = stripslashes($data);
                   $data = htmlspecialchars($data);
                   return $data;
                 }
                
                 //echo "<a  href='mailto::$recipient' target='_blank'> </a>"
                 header("Location: mailto:$recipient?subject=XCC Website Email from $name&body=Message from $name:%0d%0a%0d%0a $query");
                 die();

                ?>