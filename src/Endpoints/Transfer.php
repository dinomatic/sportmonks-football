<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use Sportmonks\Football\FootballApiHelper;
use stdClass;

class Transfer extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/transfers';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "football/transfers/{$id}";

        return $this->fetch($url);
    }

    public function getByDateRange(string $dateFrom, string $dateTo): stdClass
    {
        $dateFrom = FootballApiHelper::verifyDate($dateFrom);

        $dateTo = FootballApiHelper::verifyDate($dateTo);

        $url = "football/transfers/between/{$dateFrom}/{$dateTo}";

        return $this->fetch($url);
    }

    public function getByTeamId(int $teamId): stdClass
    {
        $url = "football/transfers/teams/{$teamId}";

        return $this->fetch($url);
    }

    public function getByPlayerId(int $playerId): stdClass
    {
        $url = "football/transfers/players/{$playerId}";

        return $this->fetch($url);
    }

    public function getLatest(): stdClass
    {
        $url = 'football/transfers/latest';

        return $this->fetch($url);
    }
}
