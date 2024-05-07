<?php

namespace Sportmonks\Football;

use Sportmonks\Football\Endpoints\Bookmaker;
use Sportmonks\Football\Endpoints\Coach;
use Sportmonks\Football\Endpoints\Commentary;
use Sportmonks\Football\Endpoints\Country;
use Sportmonks\Football\Endpoints\Fixture;
use Sportmonks\Football\Endpoints\InPlayOdd;
use Sportmonks\Football\Endpoints\League;
use Sportmonks\Football\Endpoints\LiveScore;
use Sportmonks\Football\Endpoints\Market;
use Sportmonks\Football\Endpoints\Player;
use Sportmonks\Football\Endpoints\Prediction;
use Sportmonks\Football\Endpoints\PreMatchNews;
use Sportmonks\Football\Endpoints\PreMatchOdd;
use Sportmonks\Football\Endpoints\Referee;
use Sportmonks\Football\Endpoints\Rival;
use Sportmonks\Football\Endpoints\Round;
use Sportmonks\Football\Endpoints\Schedule;
use Sportmonks\Football\Endpoints\Season;
use Sportmonks\Football\Endpoints\Stage;
use Sportmonks\Football\Endpoints\Standing;
use Sportmonks\Football\Endpoints\State;
use Sportmonks\Football\Endpoints\Statistic;
use Sportmonks\Football\Endpoints\Team;
use Sportmonks\Football\Endpoints\TeamSquad;
use Sportmonks\Football\Endpoints\TopScorer;
use Sportmonks\Football\Endpoints\Transfer;
use Sportmonks\Football\Endpoints\TvStation;
use Sportmonks\Football\Endpoints\Type;
use Sportmonks\Football\Endpoints\Venue;

class FootballApi
{
    public static function bookmakers(): Bookmaker
    {
        return new Bookmaker();
    }

    public static function coaches(): Coach
    {
        return new Coach();
    }

    public static function commentaries(): Commentary
    {
        return new Commentary();
    }

    public static function countries(): Country
    {
        return new Country();
    }

    public static function fixtures(): Fixture
    {
        return new Fixture();
    }

    public static function inPlayOdds(): InPlayOdd
    {
        return new InPlayOdd();
    }

    public static function leagues(): League
    {
        return new League();
    }

    public static function liveScores(): LiveScore
    {
        return new LiveScore();
    }

    public static function markets(): Market
    {
        return new Market();
    }

    public static function players(): Player
    {
        return new Player();
    }

    public static function predictions(): Prediction
    {
        return new Prediction();
    }

    public static function preMatchNews(): PreMatchNews
    {
        return new PreMatchNews();
    }

    public static function preMatchOdds(): PreMatchOdd
    {
        return new PreMatchOdd();
    }

    public static function referees(): Referee
    {
        return new Referee();
    }

    public static function rivals(): Rival
    {
        return new Rival();
    }

    public static function rounds(): Round
    {
        return new Round();
    }

    public static function schedules(): Schedule
    {
        return new Schedule();
    }

    public static function seasons(): Season
    {
        return new Season();
    }

    public static function stages(): Stage
    {
        return new Stage();
    }

    public static function standings(): Standing
    {
        return new Standing();
    }

    public static function states(): State
    {
        return new State();
    }

    public static function statistics(): Statistic
    {
        return new Statistic();
    }

    public static function teams(): Team
    {
        return new Team();
    }

    public static function teamSquads(): TeamSquad
    {
        return new TeamSquad();
    }

    public static function topScorers(): TopScorer
    {
        return new TopScorer();
    }

    public static function transfers(): Transfer
    {
        return new Transfer();
    }

    public static function tvStations(): TvStation
    {
        return new TvStation();
    }

    public static function types(): Type
    {
        return new Type();
    }

    public static function venues(): Venue
    {
        return new Venue();
    }
}
