<?php
require "php_universal_functions/dbPripojeni.php";
require "PrihlaseniFunkce.php";
if(isset($_POST["p_passwd"]))
{
    Kontrola_Prihlaseni($db);
}
