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
        $frameIndex = 0;
        for ($frame = 0; $frame < 10; $frame++) {
            if ($this->rolls[$frameIndex] + $this->rolls[$frameIndex+1] == 10) {
                $this->score += 10 + $this->rolls[$frameIndex+2];
            } else {
                $this->score += $this->rolls[$frameIndex] + $this->rolls[$frameIndex+1];
            }
            $frameIndex += 2;
        }

        return $this->score;
    }
}
