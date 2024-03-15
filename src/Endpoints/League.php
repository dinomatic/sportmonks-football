<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use Sportmonks\Football\FootballApiHelper;
use stdClass;

class League extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/leagues';

        return $this->fetch($url);
    }

    public function getLive(): stdClass
    {
        $url = 'football/leagues/live';

        return $this->fetch($url);
    }

    public function getById(int $leagueId): stdClass
    {
        $url = "football/leagues/{$leagueId}";

        return $this->fetch($url);
    }

    public function getByFixtureDate(int $date): stdClass
    {
        $date = FootballApiHelper::verifyDate($date);

        $url = "football/leagues/date/{$date}";

        return $this->fetch($url);
    }

    public function getByCountryId(int $countryId): stdClass
    {
        $url = "football/leagues/countries/{$countryId}";

        return $this->fetch($url);
    }

    public function getByTeamId(int $teamId): stdClass
    {
        $url = "football/leagues/teams/{$teamId}";

        return $this->fetch($url);
    }

    public function getCurrentByTeamId(int $teamId): stdClass
    {
        $url = "football/leagues/teams/{$teamId}/current";

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "football/leagues/search/{$search}";

        return $this->fetch($url);
    }
}
