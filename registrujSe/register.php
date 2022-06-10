<?php
require "php_universal_functions/dbPripojeni.php";
require "php_universal_functions/functions.php";
require "register_funkce.php";
if(isset($_POST["email"]))
{
    if((!(queryEmail($_POST["email"])))||(!(queryName($_POST["uname"]))))
    {
        function_alert("Email anebo uživatelské jméno už jsou zaregistrována");
    }
    else
    {
        if(!(strpos($_POST["uname"],"@")))
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
            function_alert("v uživatelském jméně nemůže být znak \'@\'");
        }
    }
   
}