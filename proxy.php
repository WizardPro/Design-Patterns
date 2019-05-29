<?php

interface Subject
{
    public function request();
}

class RealSubject implements Subject
{
    public function request()
    {
        echo '真实的请求'.PHP_EOL;
    }
}

class Proxy implements Subject
{
    protected $real_request;

    public function request()
    {
        if ($this->real_request == null) {
            $this->real_request = new RealSubject();
        }
        $this->real_request->request();
    }
}

$proxy = new Proxy();
$proxy->request();
