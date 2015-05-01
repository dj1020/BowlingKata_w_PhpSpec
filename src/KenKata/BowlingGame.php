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
        $i = 0;
        for ($frame = 0; $frame < 10; $frame++) {
            if ($this->rolls[$i] + $this->rolls[$i+1] == 10) {
                $this->score += 10 + $this->rolls[$i+2];
            } else {
                $this->score += $this->rolls[$i] + $this->rolls[$i+1];
            }
            $i += 2;
        }

        return $this->score;
    }
}
