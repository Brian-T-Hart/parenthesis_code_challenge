<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ParenthesisTest extends TestCase
{
    public function testParenthesisAreValid(): void
    {
        $this->assertEquals(true, ParenthesisChallenge::validParenthesis(null));
        $this->assertEquals(true, ParenthesisChallenge::validParenthesis(""));
        $this->assertEquals(false, ParenthesisChallenge::validParenthesis(")())"));
        $this->assertEquals(false, ParenthesisChallenge::validParenthesis("(()("));
        $this->assertEquals(false, ParenthesisChallenge::validParenthesis("(()))"));
    }
}
