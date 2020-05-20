<?php

namespace Codeat3\LaravelMindchow;

use Zttp\Zttp;
use Illuminate\Support\Arr;
use Codeat3\LaravelMindchow\Exceptions\ApiKeyMissingException;

class LaravelMindchow
{
    const DOMAIN = 'https://api.codeat3.co';

    const RANDOM_API_ENDPOINT = '/mindchow/random';

    private function getApiUrl()
    {
        return self::DOMAIN.self::RANDOM_API_ENDPOINT;
    }

    private function getHeaders()
    {
        $apiKey = Arr::get(config('laravel-mindchow'), 'API_KEY');
        if (empty($apiKey)) {
            throw new ApiKeyMissingException('Api Key Missing');
        }

        return [
            'Authorization' => 'Bearer '.$apiKey,
            'Accept' => 'application/json',
        ];
    }

    // Build your next great package.
    public function random()
    {
        $response = Zttp::withHeaders($this->getHeaders())->get($this->getApiUrl());

        return $response->json();
    }
}
