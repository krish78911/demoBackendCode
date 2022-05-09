<?php

class RedisCache implements InterfaceCachingSystemType, InterfaceSetkey, InterfaceLPush {
    private $cacheName;
    public function __construct() { 
        $this->cacheName = new \Redis();
    }
    public function getCacheValue() {
        return $this->cacheName;
    }
    public function setKey(string $key, string $value, string $is_compressed=null, string $ttl=null) {
        return $this->cacheName->set($key,$value,$is_compressed,$ttl);;
    }
    public function lpushKey(string $key, string $value) {
        return  $this->cacheName->lPush($key,$value);
    }
}