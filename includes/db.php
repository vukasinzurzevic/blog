<?php
$db['db_host']= "localhost";
$db['db_user']= "root";
$db['db_pass']= "123";
$db['db_name']= "cms_1";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


if(!$connection){
    die("Konekcija neuspesna!" . mysqli_connect_error($connection));
}