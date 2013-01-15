<?php
require_once __DIR__.'/vendor/autoload.php';

$yamaki = new Yamaki();
$yamaki-> get("/yamaki/:ichiban/:niban",function($route,$input){
   echo __FILE__.":".__LINE__."\n";
);
