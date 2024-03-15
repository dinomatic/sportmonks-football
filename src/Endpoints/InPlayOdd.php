<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class InPlayOdd extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/odds/inplay';

        return $this->fetch($url);
    }

    public function getByFixtureId(int $fixtureId): stdClass
    {
        $url = "football/odds/inplay/fixtures/{$fixtureId}";

        return $this->fetch($url);
    }

    public function getByFixtureIdAndBookmakerId(int $fixtureId, int $bookmakerId): stdClass
    {
        $url = "football/odds/inplay/fixtures/{$fixtureId}/bookmakers/{$bookmakerId}";

        return $this->fetch($url);
    }

    public function getByFixtureIdAndMarketId(int $fixtureId, int $marketId): stdClass
    {
        $url = "football/odds/inplay/fixtures/{$fixtureId}/markets/{$marketId}";

        return $this->fetch($url);
    }

    public function getLatest(): stdClass
    {
        $url = 'football/odds/inplay/latest';

        return $this->fetch($url);
    }
}
