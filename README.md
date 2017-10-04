# app-direct
Wrapper Class for AppDirect

# Installation
To install it with composer:
```shell
composer require adityasetiono/app-direct
```

# Usage
```php
$oauthRequest = new \OAuth('consumer_secret', 'consumer_key', OAUTH_SIG_METHOD_HMACSHA1);
$url = 'http://url.from.appdirect/';
$response = AppDirectRequest::send($url, $oauthRequest->getRequestHeader('GET', $url));
```
