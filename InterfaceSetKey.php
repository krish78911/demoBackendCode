<?php

interface InterfaceSetkey {
    public function setKey(string $key, string $value, string $is_compressed=null, string $ttl=null);
}