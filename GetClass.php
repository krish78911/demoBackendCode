<?php

class GetClass
{
    public function getKey(string $key, $cache){

        return $cache->get($key);
    }
}

