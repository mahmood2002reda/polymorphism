<?php
require  "greeting.php";
require "french.php";
require "german.php";
require "english.php";


function greeting($people ){

    foreach ($people as $person){
    echo $person-> greet() ;
    }
}



$people =[
new English(), new German(),new French(),
];
greeting($people);
