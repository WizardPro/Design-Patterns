<?php

//抽象算法类
abstract class Strategy
{
    abstract public function algorithmInterface();
}
//具体算法A
class ConcreteStrategyA extends Strategy
{
    public function algorithmInterface()
    {
        echo '算法A实现'.PHP_EOL;
    }
}
//上下文
class Context
{
    protected $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    //上下文接口
    public function contextInterface()
    {
        $this->strategy->algorithmInterface();
    }
}

$context = new Context(new ConcreteStrategyA());
$context->contextInterface();
