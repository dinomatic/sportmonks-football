<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Market extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'odds/markets';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "odds/markets/{$id}";

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "odds/markets/search/{$search}";

        return $this->fetch($url);
    }
}
