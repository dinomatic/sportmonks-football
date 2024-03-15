<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class PreMatchNews extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/news/pre-match';

        return $this->fetch($url);
    }

    public function getUpcoming(int $seasonId): stdClass
    {
        $url = 'football/news/pre-match/upcoming';

        return $this->fetch($url);
    }

    public function getBySeasonId(int $seasonId): stdClass
    {
        $url = "football/news/pre-match/seasons/{$seasonId}";

        return $this->fetch($url);
    }
}
