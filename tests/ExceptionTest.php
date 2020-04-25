<?php

declare(strict_types=1);

namespace wahibzakraoui\tamle;
use wahibzakraoui\tamle\Exceptions\TamleException;

class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testRaiseExceptionTest()
    {
        $this->assertStringContainsStringIgnoringCase('Exception Message',$this->raiseTamleException('Exception Message') );
    }

    /**
     * Raise TamleException
     *
     * @param string $message
     * @return string Returns the phrase passed in
     */
    private function raiseTamleException(string $message): string
    {
        try {
            throw new TamleException($message);
        } catch (TamleException $e) {
            return $e->getMessage();
        }
    }
}
