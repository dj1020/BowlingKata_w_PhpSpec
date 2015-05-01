<?php

namespace spec\KenKata;

use KenKata\BowlingGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class BowlingGameSpec
 * @package spec\KenKata
 * @mixin BowlingGame
 */
class BowlingGameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('KenKata\BowlingGame');
    }

    private function rollMany($n, $pin)
    {
        for ($i = 0; $i < $n; $i++) {
            $this->roll($pin);
        }
    }

    private function rollSpare()
    {
        $this->rollMany(1, 6);
        $this->rollMany(1, 4);
    }

    function it_should_score_zero()
    {
        $this->rollMany(20, 0);
        $this->score()->shouldReturn(0);
    }

    function it_should_score_20()
    {
        $this->rollMany(20, 1);
        $this->score()->shouldReturn(20);
    }

    function it_should_score_for_one_spare()
    {
        $this->rollSpare();
        $this->rollMany(1, 7);
        $this->rollMany(17, 0);

        $this->score()->shouldReturn(24);
    }

}
