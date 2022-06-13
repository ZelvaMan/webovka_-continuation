<?php
$DBserver = "localhost";
$DBuzivatel = "spseilife4fancz";
$DBheslo = "Patsina123";
$DBnazev = "spseilife";

$db = mysqli_connect($DBserver, $DBuzivatel, $DBheslo, $DBnazev);
mysqli_set_charset($db, "utf8");