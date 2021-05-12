/*
 * Created on Mon Jan 04 2021
 * Author: Luke Sequeira
 * Client-Side Javascript for XCC webiste
 *
 * Copyright (c) 2021
 */



/**
 * 
 * Note: due to a html layout change the home functionality is now obselete
 * 
 */

function MenuHoverOn(item, home=null){ //makes element change color on hover. If home is not null, sets it to colored

    if(item != null){
        item.style.color = "#38a9ff"; //You can set the color how you please
    }
    if(home != null){
        home.style.backgroundImage = "url(images/ehome_blue.png)"; //You can set the color how you please
    }

}

function MenuHoverOff(item, home=null){ //makes element change color on hover

    if(item != null){
        item.style.color = "black"; //change this to change default color
    }
    if(home != null){
        home.style.backgroundImage = "url(images/ehome_1.png)"; //You can set the color how you please
    }

}

function MenuItemClick(page){ //goes to inputed pages

    document.location.href = page;

}
