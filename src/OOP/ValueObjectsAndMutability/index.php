<?php

// benefit of using value object
// 1. Avoids primitive obsession - and readability
// 2. Helps with consistency - by performing the validation within the constructor
// 3. Immutable
class Age
{
    private int $age;

    public function __construct(int $age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense');
        }
        $this->age = $age;
    }

    //mutable version.
    public function increment()
    {
        ++$this->age;
    }

    //immutable version.
    public function increment1()
    {
        return new self($this->age + 1);
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(35);
$age->increment(); //mutable version
$age = $age->increment1(); //immutable version
var_dump($age->get());

function register1(string $name, Age $age)
{
}

function register(string $name, int $age)
{
    //Situations like this that the int is not enough for our needs, so we may need to create a value object.
    if ($age < 0 || $age > 120) {
        throw new InvalidArgumentException('That makes no sense');
    }
}

// if the $age was public, we can change it very easily.
// this is bad, this by pass the whole validation process.
$age = new Age(35);
$age->age = 360;

register1('andy song', $age);

// if you want to change the value, you just create a new one.
$age = new Age(35);
$age = new Age(36);

register('andy song', 123);
register('andy song', -50);
register1('andy song', new Age(1120));

// mutable vs immutable.
// can change the state vs can not change the state.
