<?php
require "php_universal_functions/dbPripojeni.php";
require "php_universal_functions/functions.php";
require "PrihlaseniFunkce.php";
if(isset($_POST["p_passwd"]))
{
    $result = Kontrola_Prihlaseni($db);
    if(empty($result))
    {
        function_alert("přihlašovací jméno nebo heslo není správné");
    }
    else
    {
       $_SESSION["user"]=$result ;
       if($_SESSION["user"]["name"]=="hroch")
       {
        $_SESSION["admin"]=true;
       }
       header('Location: user.php');
    }


}
