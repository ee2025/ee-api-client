# ee-api-client

This is an API client for the EarthEmpires API.

### Requirements

* PHP 7.2 or higher

* PHP cURL

* Composer

### Installation

    composer require ee2025/ee-api-client
    
### Example

Get all GS attacks on Alliance Server

    use ee_api\{EeApiClient, Server, NewsRequestBuilder};

    $api_key = "foobar"; // change this to your API key

    $Builder = new NewsRequestBuilder();
    $Builder->setServerId(Server::ALLIANCE);
    $Builder->setAttackType(AttackType::GS);
    $Request = $Builder->build();

    $ApiClient = new EeApiClient($api_key);
    $result = $ApiClient->getJson($Request, JSON_PRETTY_PRINT);

    echo $result;
    
## API Endpoints

### Market Info

    $Builder = new MarketInfoRequestBuilder();
    
Only request latest news

* `setNewOnly(bool $enabled)`

-----

### Market Transaction

    $Builder = new MarketTxRequestBuilder();
    
Set the start time (unix timestamp)

* `setStartTime(int $timestamp)`

-----

### News

    $Builder = new NewsRequestBuilder();
    
Set the start time (unix timestamp)

* `setStartTime(int $timestamp)`

Enable/disable testing

* `setTesting(bool $enabled)`

Set the ID to start at

* `setStartId(int $id)`

-----

### Ranks

    $Builder = new RanksRequestBuilder();

Set the final reset ID to fetch

`setFinalResetId(int $id)`

-----

#### Reset Info

    $Builder = new ResetInfoRequestBuilder();
    
Set the start time (unix timestamp)

* `setStartTime(int $timestamp)`

Enable/disable testing

* `setTesting(bool $enabled)`

Set the ID to start at

* `setStartId(int $id)`