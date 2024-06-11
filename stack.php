<?php


$stack = new Stack();

$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->pop();
$stack->push('test');
$y = 0;
$stack->print();
echo '<pre>';
echo '</pre>';
$stack->getTop($y);
echo '<pre>';
echo 'y value is: ';
print_r($y);

class Stack
{

    const MAX_SIZE = 100;
    private $top;
    private array $items;

    public function __construct()
    {
        $this->top = -1;
    }

    public function push($element)
    {

        if ($this->top >= self::MAX_SIZE) {
            return 'Stack full out';
        } else {
            $this->top++;
            $this->items[] = $element;
        }
    }

    public function isEmpty()
    {
        if ($this->top > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function pop()
    {
        if ($this->isEmpty() == 0) {
            return 'Stack is empty';
        } else {
            $this->top--;
            array_pop($this->items);
        }
    }
    public function getTop(&$stackTop)
    {
        if ($this->isEmpty() == 0) {
            return 'Stack is empty';
        } else {

            $stackTop = $this->items[$this->top];
            $topElement = 'Top element is: ' .  $stackTop;
            print_r($topElement);
        }
    }
    public function print()
    {
        for ($i = $this->top; $i >= 0; $i--) {
            echo '<pre>';
            print_r($this->items[$i]);
            echo '<pre>';
        }
    }

}