<?php

abstract class AbstractClass
{
    abstract public function primitiveOperation1();

    abstract public function primitiveOperation2();

    final public function templateMethod()
    {
        $this->primitiveOperation1();
        $this->primitiveOperation2();
    }
}

class ConcreteClassA extends AbstractClass
{
    public function primitiveOperation1()
    {
        echo '具体类A方法1实现'.PHP_EOL;
    }

    public function primitiveOperation2()
    {
        echo '具体类A方法2实现'.PHP_EOL;
    }
}

class ConcreteClassB extends AbstractClass
{
    public function primitiveOperation1()
    {
        echo '具体类B方法1实现'.PHP_EOL;
    }

    public function primitiveOperation2()
    {
        echo '具体类B方法2实现'.PHP_EOL;
    }
}

$a = new ConcreteClassA();
$a->TemplateMethod();
$b = new ConcreteClassB();
$b->TemplateMethod();
