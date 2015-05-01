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
            if ($this->rolls[$i] + $this->rolls[$i + 1] == 10) {
                $this->score += 10 + $this->rolls[$i+2];
                // wrong logic here
            } else {
                $this->score += $this->rolls[$i];
            }
        }

        return $this->score;
    }
}
