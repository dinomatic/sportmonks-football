<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Stage extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/stages';

        return $this->fetch($url);
    }

    public function getById(int $stageId): stdClass
    {
        $url = "football/stages/{$stageId}";

        return $this->fetch($url);
    }

    public function getBySeasonId(int $seasonId): stdClass
    {
        $url = "football/stages/season/{$seasonId}";

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "football/stages/search/{$search}";

        return $this->fetch($url);
    }
}
