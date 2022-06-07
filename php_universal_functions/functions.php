<?php
function function_alert($message) 
{ 
      echo  "<script defer>window.onload=()=>alert('$message');</script>";
  }
  function queryEmail($email)
  {
      require "dbPripojeni.php";
      $dotaz = "select * from users where email = '{$email}'";
      $result= mysqli_query($db, $dotaz);
      $qery_result=mysqli_fetch_assoc($result);
      return empty($qery_result);
  }
  function queryName($name)
  {
    require "dbPripojeni.php";
    $dotaz = "select * from users where name = '{$name}'";
    $result= mysqli_query($db, $dotaz);
    $qery_result=mysqli_fetch_assoc($result);
    return empty($qery_result); 
  }
  function queryPasswd($passwd)
  {
    require "dbPripojeni.php";
    $dotaz = "select * from users where pasword = '{$passwd}'";
    $result= mysqli_query($db, $dotaz);
    $qery_result=mysqli_fetch_assoc($result);
    return empty($qery_result); 
  }
  function kontrolaHesla($heslo1,$heslo2)
  {
  return ($heslo1==$heslo2);
  }