<?php

namespace KenKata;

class BowlingGame
{
    private $score = 0;
    private $rolls = [];

    public function roll($pin)
    {
        $this->rolls[] = $pin;
    }

    public function score()
    {
        for ($frame = 0; $frame < 10; $frame++) {
            $this->score += $this->rolls[$frame] + $this->rolls[$frame+1];
        }
 
        return $this->score;
    }
}
