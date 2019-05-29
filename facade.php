<?php

class SubSystemOne
{
    public function methodOne()
    {
        echo '子系统一'.PHP_EOL;
    }
}
class SubSystemTwo
{
    public function methodTwo()
    {
        echo '子系统二'.PHP_EOL;
    }
}
class Facade
{
    protected $one;
    protected $two;

    public function __construct()
    {
        $this->one = new SubSystemOne();
        $this->two = new SubSystemTwo();
    }

    public function methodA()
    {
        echo '方法组A'.PHP_EOL;
        $this->one->methodOne();
        $this->two->methodTwo();
    }

    public function methodB()
    {
        echo '方法组B'.PHP_EOL;
        $this->two->methodTwo();
    }
}
$facade = new Facade();
$facade->methodA();
$facade->methodB();
