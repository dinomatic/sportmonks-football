<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class TopScorer extends FootballApiClient
{
    public function getBySeasonId(int $seasonId): stdClass
    {
        $url = "football/topscorers/seasons/{$seasonId}";

        return $this->fetch($url);
    }

    public function getByStageId(int $stageId): stdClass
    {
        $url = "football/topscorers/stages/{$stageId}";

        return $this->fetch($url);
    }
}
