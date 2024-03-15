<?php

namespace Sportmonks\Football;

use InvalidArgumentException;
use Sportmonks\Football\Exceptions\ApiRequestException;
use stdClass;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class FootballApiClient
{
    private HttpClientInterface $client;

    private array $query = [];

    public function __construct()
    {
        $this->query['api_token'] = $_ENV['SPORTMONKS_API_TOKEN'];

        if (empty($this->query['api_token'])) {
            throw new InvalidArgumentException('Invalid API Key Provided');
        }

        if (isset($_ENV['SPORTMONKS_TIMEZONE'])) {
            $this->query['tz'] = $_ENV['SPORTMONKS_TIMEZONE'];
        }

        $this->client = HttpClient::create(['base_uri' => 'https://api.sportmonks.com/v3/']);
    }

    protected function fetch(string $url): stdClass
    {
        try {
            $response = $this->client->request('GET', $url, ['query' => $this->query])->getContent();

            return json_decode($response);
        } catch (TransportExceptionInterface|RedirectionExceptionInterface|ClientExceptionInterface|ServerExceptionInterface $e) {
            throw new ApiRequestException($e->getMessage(), $e->getCode());
        }
    }

    public function setBookmakers(array $bookmakerIds): self
    {
        $this->query['bookmakers'] = implode(',', array_map('trim', array_filter($bookmakerIds)));

        return $this;
    }

    public function setFixtures(array $fixtureIds): self
    {
        $this->query['fixtures'] = implode(',', array_map('trim', array_filter($fixtureIds)));

        return $this;
    }

    public function setIncludes(array $includes): self
    {
        $this->query['include'] = implode(';', array_map('trim', array_filter($includes)));

        return $this;
    }

    public function setLeagues(array $leagueIds): self
    {
        $this->query['leagues'] = implode(',', array_map('trim', array_filter($leagueIds)));

        return $this;
    }

    public function setMarkets(array $marketIds): self
    {
        $this->query['markets'] = implode(',', array_map('trim', array_filter($marketIds)));

        return $this;
    }

    public function setGroup(int $groupId): self
    {
        $this->query['group_id'] = $groupId;

        return $this;
    }

    public function setPage(int $page): self
    {
        $this->query['page'] = $page;

        return $this;
    }
}
