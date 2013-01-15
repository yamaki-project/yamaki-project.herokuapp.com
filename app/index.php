<?php
require_once __DIR__.'/vendor/autoload.php';

$yamaki = new Yamaki();
$yamaki -> get("/yamaki/:ichiban/:niban",function($route,$input){
   echo "ichiban:".$route -> param("ichiban")."\n";
   echo "niban:".$route -> param("niban")."\n";
});
