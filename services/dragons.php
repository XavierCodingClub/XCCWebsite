<?php

// Poop I got I get sent at some point 

/*
name
email
some sort of way to auth

Assume they are
$name
$email
*/



// Here be dragons. Thou art forewarned

//Need a better name
class login{



    //only one public func
    public function cookie_send($fincookie){
        $cookie_name = "Auth";
        $cookie_value = $fincookie;

        //15 is the number of days
        setcookie($cookie_name,$cookie_value, time() + (86400 * 15), "/");
    }

    protected function verify($email, $name){
        $jsondata = file_get_contents("people.json");
        $json = json_decode($jsondata, true);

        for ( $i = 0; $json['amount'][0]['value'] > i; i += 1){

        }
        
    }




}