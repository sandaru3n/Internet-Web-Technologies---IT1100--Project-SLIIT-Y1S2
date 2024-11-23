<?php

$dbhost = "localhost";
$dbuser = "queenzbf_demo_sample_user";
$dbpass = "Sandaru2002@";
$dbname = "queenzbf_demo_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}