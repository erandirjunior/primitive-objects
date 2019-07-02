<?php

require_once '../vendor/autoload.php';

//$bool = \Primitive\Boolean::isBoolean(1);

$array = new \Primitive\ArrayList();

var_dump($array->getValue());
var_dump($array->add('ok'));
/*var_dump($array->addWithKey('chave', 'valor'));
var_dump($array->getValue());
var_dump($array->remove());
var_dump($array->getValue());*/
var_dump($array->addFirst('novo', 'novo2'));
var_dump($array->getValue());
var_dump($array->filter(function ($v) { if(strlen($v) == 2) {return $v;} }));
var_dump($array->length());
