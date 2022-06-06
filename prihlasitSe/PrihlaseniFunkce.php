<?php
function Kontrola_Prihlaseni($db)
{
   if (strpos($_POST["p_EmailOrName"], "@")) {
      query("email", $db);
   } else {
    query("name", $db);
   }
}
function query($term, $db)
{
   $hashed_passwd = sha1($_POST["p_passwd"]);
   echo $hashed_passwd;
   $dotaz = 'select * from users where '.$term." like ".$_POST["p_EmailOrName"].' and password like '.$hashed_passwd;
   mysqli_query($db, $dotaz);
   json_encode(mysqli_query($db, $dotaz));
}