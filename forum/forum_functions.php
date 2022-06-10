<?php
function ulozPrispevek($db,$prispevekInfo)
{
    $dotaz="insert into posts (title,Uid,content)
     values ('{$prispevekInfo["title"]}',
    '{$_SESSION['user']['Uid']}',
    '{$prispevekInfo["postContent"]}')";
      mysqli_query($db,$dotaz);
}