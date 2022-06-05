<?php
require "dbPripojeni.php";
require "register_funkce.php";
if(isset($_POST["email"]))
{
    if(kontrolaHesla($_POST["passwd"],$_POST["passwdpotvrzeni"]))
    {
        ulozUzivatele($db,$_POST);
    } 

}