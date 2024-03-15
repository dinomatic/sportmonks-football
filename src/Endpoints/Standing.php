<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Standing extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/standings';

        return $this->fetch($url);
    }

    public function getBySeasonId(int $seasonId): stdClass
    {
        $url = "football/standings/seasons/{$seasonId}";

        return $this->fetch($url);
    }

    public function getByRoundId(int $roundId): stdClass
    {
        $url = "football/standings/rounds/{$roundId}";

        return $this->fetch($url);
    }

    public function getCorrectionsBySeasonId(int $seasonId): stdClass
    {
        $url = "football/standings/corrections/seasons/{$seasonId}";

        return $this->fetch($url);
    }

    public function getLiveByLeagueId(int $leagueId): stdClass
    {
        $url = "football/standings/live/leagues/{$leagueId}";

        return $this->fetch($url);
    }
}
