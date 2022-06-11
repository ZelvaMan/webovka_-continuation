<?php
function ChangeImg($db,$path)
{
    $dotaz = 'update users 
    set Profile_Img = "'.$path.'"
    WHERE Uid='.$_SESSION['user']["Uid"].'';
    mysqli_query($db, $dotaz);
    var_dump(mysqli_query($db, $dotaz));
    $dotaz='select Profile_Img from users 
    WHERE Uid='.$_SESSION['user']["Uid"].' ';
    $result=mysqli_query($db, $dotaz);
    $newImg=mysqli_fetch_assoc($result);
    return $newImg;
}