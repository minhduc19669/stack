<?php
include_once 'Stack.php';
$stack=new Stack(10);
$stack->push(1);
$stack->push(2);
$stack->push(3);
var_dump($stack->getStack());
