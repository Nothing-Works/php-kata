<?php

namespace App\OOP\Encapsulation;

class TennisMatch
{
    private $playerOne;

    /** @api means this is the public api */
    public function score()
    {
    }

    public function playerOne()
    {
        return $this->playerOne;
    }

    protected function hasAdvantage()
    {
    }

    protected function inDeuce()
    {
    }

    private function hasWinner()
    {
    }
}
