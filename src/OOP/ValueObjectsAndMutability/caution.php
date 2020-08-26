<?php

// Too many value objects may not a good idea. Only reach it when you really need it.
function register(FistName $first, LastName $last, Age $age, EmailAddress $email, Password $password)
{
}

// One good use case is that it is good for grouping two data as a whole like coordinate.
// when you always pass two parameters around, that is a good opportunity that we can group them together.
// coordinate example

// Another example is Money contains amount and currency.

class Coordinate
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

function pin(Coordinate $coordinate)
{
    $coordinate->x;
    $coordinate->y;
}

function distance(Coordinate $begin, Coordinate $end)
{
}

// Example, this can also be grouped as a value object.

function scheduleVacation($arrive, $depart)
{
}

class DateSpan
{
    private $begin;
    private $end;

    public function exampleMethod()
    {
    }
}
