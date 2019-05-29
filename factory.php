<?php

class Operation
{
    protected $number_a = 0;
    protected $number_b = 0;

    public function numberA($value = null)
    {
        if ($value) {
            $this->number_a = $value;
        } else {
            return $number_a;
        }
    }

    public function numberB($value = null)
    {
        if ($value) {
            $this->number_b = $value;
        } else {
            return $number_b;
        }
    }

    public function getResult()
    {
        $result = 0;

        return $result;
    }
}

class OperationAdd extends Operation
{
    public function getResult()
    {
        $result = $this->number_a + $this->number_b;

        return $result;
    }
}

class OperationFactory
{
    public static function createOperate(string $operate)
    {
        switch ($operate) {
            case '+':
                $oper = new OperationAdd();
                break;
            default:
                $oper = null;
                break;
        }

        return $oper;
    }
}

$oper = OperationFactory::createOperate('+');
$oper->numberA(1);
$oper->numberB(2);
echo $oper->getResult().PHP_EOL;
