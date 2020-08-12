<?php

namespace App\OOP\Inheritance;

class AchievementType
{
    public function name()
    {
        return 'Achievement Type';
    }

    public function difficulty()
    {
        return 'intermediate';
    }

    public function icon()
    {
        return '/images/'.'achievement-type'.'png';
    }
}

//"is a"
class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
        //return true or false;
    }

    //override method if needed
    public function name()
    {
        return 'Welcome Aboard!';
    }
}
