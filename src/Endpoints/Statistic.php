<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Statistic extends FootballApiClient
{
    public function getSeasonStatsByPlayerId(int $playerId): stdClass
    {
        $url = "football/statistics/seasons/players/{$playerId}";

        return $this->fetch($url);
    }

    public function getSeasonStatsByTeamId(int $teamId): stdClass
    {
        $url = "football/statistics/seasons/teams/{$teamId}";

        return $this->fetch($url);
    }

    public function getSeasonStatsByCoachId(int $coachId): stdClass
    {
        $url = "football/statistics/seasons/coaches/{$coachId}";

        return $this->fetch($url);
    }

    public function getSeasonStatsByRefereeId(int $refereeId): stdClass
    {
        $url = "football/statistics/seasons/referees/{$refereeId}";

        return $this->fetch($url);
    }

    // FIX. check the docs.
    public function getStageStatsByStageId(int $stageId): stdClass
    {
        $url = "football/statistics/stages/{$stageId}";

        return $this->fetch($url);
    }

    // FIX. check the docs.
    public function getRoundStatsByRoundId(int $roundId): stdClass
    {
        $url = "football/statistics/rounds/{$roundId}";

        return $this->fetch($url);
    }
}
