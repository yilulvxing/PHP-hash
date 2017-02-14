<?php
require 'hash.php';
//设置服务器
$node = array('a','b','c');


$hash = new Flexihash();
$s = $hash->addTargets($node);
//var_dump($hash);
/**
 * test1 ,获得服务器所构造出的所有虚拟节点
 */
var_dump($s->_positionToTarget);



/**
 * test2 ,传入键,获得计算匹配的服务器
 */
$key = 'jzj111aaa';
echo $hash->lookup($key);


?>