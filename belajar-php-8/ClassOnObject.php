<?php

class Login
{

}

$login = new Login();

var_dump($login::class); // PHP 8
var_dump(get_class($login)); // PHP 7
var_dump(Login::class); // Older php