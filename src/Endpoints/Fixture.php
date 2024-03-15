<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use Sportmonks\Football\FootballApiHelper;
use stdClass;

class Fixture extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/fixtures';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "football/fixtures/{$id}";

        return $this->fetch($url);
    }

    public function getByMultipleIds(array $ids): stdClass
    {
        $ids = implode(',', array_map('trim', array_filter($ids)));

        $url = "football/fixtures/multi/{$ids}";

        return $this->fetch($url);
    }

    public function getByDate(string $date): stdClass
    {
        $date = FootballApiHelper::verifyDate($date);

        $url = "football/fixtures/date/{$date}";

        return $this->fetch($url);
    }

    public function getByDateRange(string $dateFrom, string $dateTo): stdClass
    {
        $dateFrom = FootballApiHelper::verifyDate($dateFrom);

        $dateTo = FootballApiHelper::verifyDate($dateTo);

        $url = "football/fixtures/between/{$dateFrom}/{$dateTo}";

        return $this->fetch($url);
    }

    public function getByDateRangeForTeam(string $dateFrom, string $dateTo, int $teamId): stdClass
    {
        $dateFrom = FootballApiHelper::verifyDate($dateFrom);

        $dateTo = FootballApiHelper::verifyDate($dateTo);

        $url = "football/fixtures/between/{$dateFrom}/{$dateTo}/{$teamId}";

        return $this->fetch($url);
    }

    public function getByHeadToHead(int $team1Id, int $team2Id): stdClass
    {
        $url = "football/fixtures/head-to-head/{$team1Id}/{$team2Id}";

        return $this->fetch($url);
    }

    public function getByMarketId(int $marketId): stdClass
    {
        $url = "football/fixtures/upcoming/markets/{$marketId}";

        return $this->fetch($url);
    }

    public function getByTvStationId(int $tvStationId): stdClass
    {
        $url = "football/fixtures/upcoming/tv-stations/{$tvStationId}";

        return $this->fetch($url);
    }

    public function getPastByTvStationId(int $tvStationId): stdClass
    {
        $url = "football/fixtures/past/tv-stations/{$tvStationId}";

        return $this->fetch($url);
    }

    public function getLatest(): stdClass
    {
        $url = 'football/fixtures/latest';

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "football/fixtures/search/{$search}";

        return $this->fetch($url);
    }
}
