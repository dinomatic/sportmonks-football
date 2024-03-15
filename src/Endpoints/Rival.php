<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Rival extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/rivals';

        return $this->fetch($url);
    }

    public function getByTeamId(int $teamId): stdClass
    {
        $url = "football/teams/rivals/{$teamId}";

        return $this->fetch($url);
    }
}
