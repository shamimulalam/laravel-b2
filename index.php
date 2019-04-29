<?php
// Namespace

include 'file1.php';
include 'file2.php';

use \A\Human;
use \Bad\Human as HumanB;


$male = new Human();
$male->index();


$male = new HumanB();
$male->index();