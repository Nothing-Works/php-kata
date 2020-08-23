<?php

namespace App\OOP\Encapsulation;

// Encapsulation => Enclose within a capsule.
class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        return 'software developer';
    }

    public function favoriteTeam()
    {
    }

    private function thingsThatKeepUpAtNight()
    {
        return 'we are all going to die and that is terrifying.';
    }
}

// It force you that the object to have a valid state.
// for example, in this person class we can change the name from outside by doing this $bob->name = null;
$bob = new Person('bob');

var_dump($bob->job());

// In php even it's private or protected we can still access it using reflection api, but this is really not the point.
// here is how.
// $method = \ReflectionMethod(Person::class, 'thingsThatKeepUpAtNight');
// $method->setAccessible(true);

// $bob = new Person('bob');

// var_dump($method->invoke($bob));
