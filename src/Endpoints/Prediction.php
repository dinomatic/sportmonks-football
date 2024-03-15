<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Prediction extends FootballApiClient
{
    public function getProbabilities(): stdClass
    {
        $url = 'football/predictions/probabilities';

        return $this->fetch($url);
    }

    public function getProbabilityByLeague(int $leagueId): stdClass
    {
        $url = "football/predictions/probability/leagues/{$leagueId}";

        return $this->fetch($url);
    }

    public function getProbabilitiesByFixtureId(int $fixtureId): stdClass
    {
        $url = "football/predictions/probabilities/fixtures/{$fixtureId}";

        return $this->fetch($url);
    }

    public function getValueBets(): stdClass
    {
        $url = 'football/predictions/value-bets';

        return $this->fetch($url);
    }

    public function getValueBetsByFixtureId(int $fixtureId): stdClass
    {
        $url = "football/predictions/value-bets/fixtures/{$fixtureId}";

        return $this->fetch($url);
    }
}
