<?php
session_start();
if(isset($_SESSION["user"]))
{
    require "everywhere/everywhere_head.phtml";
    require "everywhere/navigation.phtml";
    require "user/user.phtml";

}
else
{
    header('Location: prihlasitSe.php');
}
