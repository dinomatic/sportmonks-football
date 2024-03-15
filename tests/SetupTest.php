<?php

namespace Sportmonks\Test;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Sportmonks\Football\Exceptions\ApiRequestException;
use Sportmonks\Football\FootballApi;

class SetupTest extends TestCase
{
    /**
     * @test
     */
    public function testEmptyApiToken()
    {
        $_ENV['SPORTMONKS_API_TOKEN'] = '';

        $this->expectException(InvalidArgumentException::class);

        FootballApi::bookmakers()->getAll();
    }

    /**
     * @test
     */
    public function testInvalidApiToken()
    {
        $_ENV['SPORTMONKS_API_TOKEN'] = 'INVALID';

        $this->expectException(ApiRequestException::class);

        FootballApi::bookmakers()->getAll();
    }
}
