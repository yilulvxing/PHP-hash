<?php
/**
 * 连接缓存服务器
 *
 * @return string
 */
function connect($key)
{	//实例化一次性hash
	require 'hash.php';
	$node = array('127.0.0.1:11211','127.0.0.1:11311');
	$hash = new Flexihash();
	$hash->addTargets($node);


    $key = md5($key);

    $server = $hash->lookup($key);
    is_array($server) || $server = explode(':', $server);
   
    return $server;
}

$server = connect('jzj');
var_dump($server);
?>