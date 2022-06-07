<?php

function Kontrola_Prihlaseni($db)
{
   if (strpos($_POST["p_EmailOrName"], "@")) {
     return query("email", $db);
   } else {
     return query("name", $db);
   }
   
}
function query($term, $db)
{
   $hashed_passwd = sha1($_POST["p_passwd"]);
   $dotaz = 'select * from users where '.$term." = \"".$_POST["p_EmailOrName"].'" and password = "'.$hashed_passwd."\"";
  $result= mysqli_query($db, $dotaz);
  $qery_result=mysqli_fetch_assoc($result);
  return $qery_result;
}