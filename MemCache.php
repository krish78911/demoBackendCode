<?php

class MemCache implements InterfaceCachingSystemType, InterfaceSetkey, InterfaceLPush {
    private $cacheName;
    public function __construct() { 
        $this->cacheName = new \Memcache();
    }
    public function getCacheValue() {
        return $this->cacheName;
    }
    public function setKey(string $key, string $value, string $is_compressed=null, string $ttl=null) {
        return $this->cacheName->set($key,$value,$ttl);
    }
    public function lpushKey(string $key, string $value) {
        throw new \Exception("method not supported");
    }
}