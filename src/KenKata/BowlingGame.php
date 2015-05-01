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
            if ($this->rolls[$frameIndex] == 10) {
                $this->score += 10 + $this->rolls[$frameIndex+1] + $this->rolls[$frameIndex+2];
                $frameIndex += 1;
            } else if ($this->isSpare($frameIndex)) {
                $this->score += 10 + $this->rolls[$frameIndex + 2];
                $frameIndex += 2;
            } else {
                $this->score += $this->sumOfPinsInTheFrame($frameIndex);
                $frameIndex += 2;
            }
        }

        return $this->score;
    }

    private function isSpare($frameIndex)
    {
        return $this->rolls[$frameIndex] + $this->rolls[$frameIndex + 1] == 10;
    }

    private function sumOfPinsInTheFrame($frameIndex)
    {
        if (isset($this->rolls[$frameIndex], $this->rolls[$frameIndex + 1])) {
            return $this->rolls[$frameIndex] + $this->rolls[$frameIndex + 1];
        }

        throw new \Exception('Frame index is out of range, check your code.');
    }
}
