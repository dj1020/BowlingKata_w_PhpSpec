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
        for ($i = 0; $i < 20; $i++) {
            $this->score += $this->rolls[$i];
        }

        return $this->score;
    }
}
