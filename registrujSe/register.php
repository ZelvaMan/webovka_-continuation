<?php
require "php_universal_functions/dbPripojeni.php";
require "register_funkce.php";
if(isset($_POST["email"]))
{
    if((strpos($_POST["uname"],"@")=== false))
    {
        if(kontrolaHesla($_POST["passwd"],$_POST["passwdpotvrzeni"]))
        {
            ulozUzivatele($db,$_POST);
            function_alert("registrace proběhla úspěšně");
        } 
        else
        {
            function_alert("hesla se neshodují");
        }
    }
    else
    {
        function_alert("v uživatelském jméně jemůže být znak '@'");
    }
}