<?php

if($_SESSION["user"])
{
require "user/user.phtml";
}
else
{
header("location:prihlasitSe.php");
}