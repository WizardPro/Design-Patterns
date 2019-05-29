<?php

abstract class Strategy
{
    abstract public function algorithmInterface();
}

class ConcreteStrategyA extends Strategy
{
    public function algorithmInterface()
    {
        echo '算法A实现'.PHP_EOL;
    }
}

class ConcreteStrategyB extends Strategy
{
    public function algorithmInterface()
    {
        echo '算法B实现'.PHP_EOL;
    }
}

class Context
{
    protected $strategy;

    public function __construct(string $type)
    {
        switch ($type) {
            case 'A':
                $this->strategy = new ConcreteStrategyA();
                break;
            case 'B':
                $this->strategy = new ConcreteStrategyB();
                break;
        }
    }

    public function getResult()
    {
        $this->strategy->algorithmInterface();
    }
}

$context_a = new Context('A');
$context_a->getResult();
$context_b = new Context('B');
$context_b->getResult();
