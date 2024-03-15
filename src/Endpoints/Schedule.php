<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Schedule extends FootballApiClient
{
    public function getBySeasonId(int $seasonId): stdClass
    {
        $url = "football/schedules/seasons/{$seasonId}";

        return $this->fetch($url);
    }

    public function getByTeamId(int $teamId): stdClass
    {
        $url = "football/schedules/teams/{$teamId}";

        return $this->fetch($url);
    }

    public function getBySeasonIdAndTeamId(int $seasonId, int $teamId): stdClass
    {
        $url = "football/schedules/seasons/{$seasonId}/teams/{$teamId}";

        return $this->fetch($url);
    }
}
