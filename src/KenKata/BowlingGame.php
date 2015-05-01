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
            if ($this->rolls[$frame] + $this->rolls[$frame+1] == 10) {
                $this->score += 10 + $this->rolls[$frame+2];
            } else {
                $this->score += $this->rolls[$frame] + $this->rolls[$frame+1];
            }
        }

        return $this->score;
    }
}
