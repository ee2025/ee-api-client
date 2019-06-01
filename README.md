# ee-api-client

This is an API client for the EarthEmpires API.

### Requirements

PHP 7.2 or higher

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

#### API Info

Parameters

* 

#### Market Info

#### Market Transaction

#### News

Parameters

* Server ID

* Attack Type

#### Ranks

#### Reset Info
