<?php
function ulozUzivatele($db,$uzivatelInfo)
{
  $hashed_passwd=password_hash($uzivatelInfo["passwd"],PASSWORD_DEFAULT);
 $dotaz="insert into users (name,email,password)
  values ('{$uzivatelInfo["uname"]}',
 '{$uzivatelInfo["email"]}',
 '{$hashed_passwd}')";
   mysqli_query($db,$dotaz);
}

function kontrolaHesla($heslo1,$heslo2)
{
return ($heslo1==$heslo2);
}
