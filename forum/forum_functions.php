<?php

function ulozPrispevek($db,$prispevekInfo)
{
   
    $dotaz="insert into users (title,Uid,content)
     values ('{$prispevekInfo["title"]}',
    '{$_SESSION['user']['Uid']}',
    '{$prispevekInfo["postContent"]}')";
      mysqli_query($db,$dotaz);
}