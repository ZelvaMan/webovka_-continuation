<?php
function savePost($db,$prispevekInfo)
{

    $dotaz="insert into posts (title,Uid,content)
     values ('{$prispevekInfo["title"]}',
    '{$_SESSION['user']['Uid']}',
    '{$prispevekInfo["postContent"]}')";
      mysqli_query($db,$dotaz);
}
function deletePost($db,$Pid)
{
    $dotaz="delete from posts where Pid=\"".$Pid."\"";
    echo $dotaz;
     mysqli_query($db,$dotaz); 
}
function getPosts($db)
{
    $dotaz= 'select * from posts';
    return  $result=mysqli_query($db,$dotaz);
}
function getUser($db,$post){
    $dotaz = 'select * from users where '.$post['Uid']." =  Uid";
    $result= mysqli_query($db, $dotaz);
    $qery_result=mysqli_fetch_assoc($result);
    return $qery_result;
}