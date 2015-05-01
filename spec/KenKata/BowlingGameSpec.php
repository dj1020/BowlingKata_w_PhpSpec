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

    function it_should_score_zero()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->roll(0);
        }

        $this->score()->shouldReturn(0);
    }

    function it_should_score_20()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->roll(1);
        }

        $this->score()->shouldReturn(20);
    }

}
