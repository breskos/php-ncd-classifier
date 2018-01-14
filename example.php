<?php

require 'ncd.class.php';


$c = new NCD();

$c->add(array(
	"hi my name is alex, what about you?" => 'ok',
	"are you hungy? what about some fries?" => 'ok',
	"how are you?" => 'ok',
	"buy viagra or dope" => 'spam',
	"viagra spam drugs sex" => 'spam',
	"buy drugs and have fun" => 'spam'
	));



print_r($c->compare('hi guy, how are you?'));
print_r($c->compare('buy viagra m0therfuck5r'))

?>