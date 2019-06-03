# ee-api-client

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ee2025/ee-api-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ee2025/ee-api-client/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/ee2025/ee-api-client/badges/build.png?b=master)](https://scrutinizer-ci.com/g/ee2025/ee-api-client/build-status/master)

This is an API client for the EarthEmpires API.

### Requirements

* PHP 7.2 or higher

* PHP cURL

* Composer

### Installation

    composer require seanmckeown/ee-api-client
    
### Example

Get all GS attacks on Alliance Server

    use ee_api\{EeApiClient, Server, NewsRequestBuilder};

    $api_key = "foobar"; // change this to your API key

    $Builder = new NewsRequestBuilder();
    $Builder->setServerId(Server::ALLIANCE);
    $Builder->setAttackType(AttackType::GS);
    $Request = $Builder->build();

    $ApiClient = new EeApiClient($api_key);
    $result = $ApiClient->getCsv($Request);

    echo $result;
    
# API Endpoints

## Market Info

    $Builder = new MarketInfoRequestBuilder();
    
Only request latest news

* `setNewOnly(bool $enabled)`

-----

## Market Transaction

    $Builder = new MarketTxRequestBuilder();
    
Set the start time (unix timestamp)

* `setStartTime(int $timestamp)`

-----

## News

    $Builder = new NewsRequestBuilder();
    
Set the start time (unix timestamp)

* `setStartTime(int $timestamp)`

Enable/disable testing

* `setTesting(bool $enabled)`

Set the ID to start at

* `setStartId(int $id)`

-----

## Ranks

    $Builder = new RanksRequestBuilder();

Set the final reset ID to fetch

`setFinalResetId(int $id)`

-----

## Reset Info

    $Builder = new ResetInfoRequestBuilder();
    
Set the start time (unix timestamp)

* `setStartTime(int $timestamp)`

Enable/disable testing

* `setTesting(bool $enabled)`

Set the ID to start at

* `setStartId(int $id)`
