# app-direct
Wrapper Class for the AppDirect Distribution 

# Installation
To install it with composer:
```shell
composer require adampatpattison/app-direct-wrapper
```

# Usage
```php
$oauthRequest = new \OAuth('consumer_secret', 'consumer_key', OAUTH_SIG_METHOD_HMACSHA1);
$eventUrl = 'http://url.from.appdirect/';
$response = AppDirectRequest::send($eventUrl, $oauthRequest->getRequestHeader('GET', $eventUrl));
```
