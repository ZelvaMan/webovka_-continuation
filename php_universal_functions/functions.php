<?php
function function_alert($message) { 
      echo  "<script defer>window.onload=()=>alert('$message');</script>";
  }
 