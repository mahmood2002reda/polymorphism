<?php 
require "lattemaker.php";
require "coffemaker.php";
require "coppuccino.php";

class allmaker {


    use coppuccino,lattemaker,CoffeMaker ;
}
