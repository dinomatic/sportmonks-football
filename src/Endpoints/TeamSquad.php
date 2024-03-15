<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class TeamSquad extends FootballApiClient
{
    public function getByTeamId(int $teamId): stdClass
    {
        $url = "football/squads/teams/{$teamId}";

        return $this->fetch($url);
    }

    public function getByTeamIdAndSeasonId(int $teamId, int $seasonId): stdClass
    {
        $url = "football/squads/seasons/{$seasonId}/teams/{$teamId}";

        return $this->fetch($url);
    }
}
