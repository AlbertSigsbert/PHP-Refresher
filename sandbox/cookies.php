<?php

/* COOKIES -Store data in the browser  */

//Set Cookie
setcookie('name', 'Albert', time() + 86400);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}