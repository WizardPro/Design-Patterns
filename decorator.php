<?php
abstract class Component
{
	abstract public function operation();
}
abstract class Decorator extends Component
{
	protected $component;

	public function setComponent(Component $component)
	{
		$this->component = $component;
	}
	public function operation()
	{
		if($this->component != null) {
			$this->component->operation();
		}
	}
}
class ConcreteComponent extends Component
{
	public function operation()
	{
		echo '具体对象的操作' . PHP_EOL;
	}
}
class ConcreteDecoratorA extends Decorator
{
	private $added_state;

	public function operation()
	{
		parent::operation();
		$added_state = 'New State';
		echo '具体装饰对象A的操作' . PHP_EOL;
	}
}
class ConcreteDecoratorB extends Decorator
{
	public function operation()
	{
		parent::operation();
		$this->addedBehavior();
		echo '具体装饰对象B的操作' . PHP_EOL;
	}
	public function addedBehavior()
	{
		echo '具体装饰对象B中独有的方法' . PHP_EOL;
	}
}

$c = new ConcreteComponent();
$a = new ConcreteDecoratorA();
$b = new ConcreteDecoratorB();

$a->setComponent($c);
$b->setComponent($c);
$a->operation();
$b->operation();
