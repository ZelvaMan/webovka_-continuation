<?php
function ulozUzivatele($db,$uzivatelInfo)
{
 $dotaz="insert into users (name,email,password)
  values ('{$uzivatelInfo["uname"]}',
 '{$uzivatelInfo["email"]}',
 '{$uzivatelInfo["passwd"]}')";
   mysqli_query($db,$dotaz);
}

function kontrolaHesla($heslo1,$heslo2)
{
return ($heslo1==$heslo2);
}