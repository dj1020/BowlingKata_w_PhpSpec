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
        foreach ($this->rolls as $pin) {
            $this->score += $pin;
        }

        return $this->score;
    }
}
