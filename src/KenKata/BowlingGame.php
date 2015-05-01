<?php

namespace KenKata;

class BowlingGame
{
    private $score = 0;

    public function roll($pin)
    {
        $this->score += $pin;
    }

    public function score()
    {
        return $this->score;
    }
}
