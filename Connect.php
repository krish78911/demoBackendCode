<?php

class ConnectClass
{
    public function connectCache(string $host, string $port, $cache){

        $cache->connect($host,$port);
    
    }
}

