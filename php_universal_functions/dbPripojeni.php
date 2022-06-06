<?php
$DBserver = "localhost";
$DBuzivatel = "root";
$DBheslo = "";
$DBnazev = "half-life_forum";

$db = mysqli_connect($DBserver, $DBuzivatel, $DBheslo, $DBnazev);
mysqli_set_charset($db, "utf8");