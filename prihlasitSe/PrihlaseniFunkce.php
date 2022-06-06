<?php
function Kontrola_Prihlaseni($db, $uzivatelInfo)
{
   if (strpos($_POST["p_EmailOrname"], "@")) {
      query("email", $db, $uzivatelInfo);
   } else {
    query("name", $db, $uzivatelInfo);
   }
}
function query($term, $db, $uzivatelInfo)
{
   $hashed_passwd = password_hash($uzivatelInfo["p_passwd"], PASSWORD_DEFAULT);
   $dotaz = 'select * from users where '.$term."= '{$uzivatelInfo["p_EmailOrname"]}' and password=".$hashed_passwd;
   mysqli_query($db, $dotaz);
   json_encode(mysqli_query($db, $dotaz));
}