<?php

namespace App\OOP\AbstractClasses;

use ReflectionClass;

//you can not new up an abstract class.
abstract class BaseAchievement
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())).'.png';
    }

    //abstract method has to be implemented by the child class and can not be implemented here(the parent).
    abstract public function qualifier($user);
}

class FirstThousandPoints extends BaseAchievement
{
    public function qualifier($user)
    {
    }
}

class FirstBestAnswer extends BaseAchievement
{
    public function qualifier($user)
    {
    }
}

class ReachTop50 extends BaseAchievement
{
    public function qualifier($user)
    {
    }
}

echo (new FirstThousandPoints())->name();
echo (new FirstBestAnswer())->name();
