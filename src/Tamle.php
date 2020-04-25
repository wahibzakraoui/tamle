<?php

declare(strict_types = 1);

namespace wahibzakraoui\tamle;

use wahibzakraoui\tamle\Exceptions\TamleException;

class Tamle
{
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase(string $phrase): string
    {
        try {
            throw new TamleException('exception happened');
        } catch (TamleException $e) {
            return $e->getMessage();
        }
    }
}
