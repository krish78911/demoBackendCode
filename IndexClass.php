<?php

// Redis
$cache=new RedisCache();
$connect=new ConnectClass();
$connect->connectCache('somehost','121', $cache->getCacheValue());
$cache->setKey('one','1');
$cache->lpushKey('two','1');
$cache->lpushKey('two','2');
$get = new GetClass();
echo $get->getKey('one', $cache->getCacheValue());

//Memcache
$cache=new MemCache();
$connect=new ConnectClass();
$cache->setKey('one','1');
$cache->lpushKey('two','2');
echo $get->getKey('one', $cache->getCacheValue());
