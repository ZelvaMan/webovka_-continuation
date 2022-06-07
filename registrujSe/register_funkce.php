<?php
function ulozUzivatele($db,$uzivatelInfo)
{
  $hashed_passwd=sha1($uzivatelInfo["passwd"]);
 $dotaz="insert into users (name,email,password)
  values ('{$uzivatelInfo["uname"]}',
 '{$uzivatelInfo["email"]}',
 '{$hashed_passwd}')";
   mysqli_query($db,$dotaz);
}


