<?php

namespace spec\KenKata;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

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

}
