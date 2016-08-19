<?php 
class Prototype
{
	static $instances = 0;
	public $instance;
	
	public function __construct()
	{
		$this->instance = ++self::$instances;
	}
	
	public function __clone()
	{
		$this->instance = ++self::$instances;
	}
}

class ConcretePrototype
{
	public $obj1;
	public $obj2;

	function __clone()
	{
		// 强制复制一份this->obj，否则仍然指向同一个对象
		// 如果没有该方法，则clone为浅复制
		$this->obj1 = clone $this->obj1;
		// 当存在对象数组的时候，可以使用以下代码实现深复制
		 /*foreach ($this as $key => $val) {
			 if (is_object($val) || (is_array($val))) {
				 $this->{$key} = unserialize(serialize($val));
			 }
		 }*/
	}
}

$prototype = new ConcretePrototype();

$prototype->obj1 = new Prototype();
$prototype->obj2 = new Prototype();

$clone = clone $prototype;

print("Original Object:\n");
print_r($prototype);

print("Cloned Object:\n");
print_r($clone);
