<?php

namespace App\OOP\Objects;

class Team
{
    private $name;

    private $members;

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {
    }

    public function manager()
    {
    }
}

class Member
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function lastViewed()
    {
    }
}

$acme2 = Team::start('Acme', [new Member('member1'), new Member('member2')]);

$acme2->add(new Member('Andy Song'));
$acme2->add(new Member('John Doe'));

$acme1 = new Team('Foo', [new Member('member1'), new Member('member2')]);

$acme1->add(new Member('Andy Song'));
$acme1->add(new Member('John Doe'));

var_dump($acme1->members());
var_dump($acme2->members());
