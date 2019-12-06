# Introduction

This is an SDK for the Telnyx APIs [v1](https://developers.telnyx.com/docs/api/v1) and [v2](https://developers.telnyx.com/docs/api/v2/)

## Composer

You can install the bindings via Composer. Run the following command:

`composer require lonnylot/telnyx-php-sdk dev-master`

To use the bindings, use Composer's autoload:

`require_once('vendor/autoload.php');`

## Dependencies

The library requires the [CrudSugar](https://github.com/lonnylot/crud-sugar/) library.

## Getting Started

This library was made so you can interact with _both_ versions of the Telnyx APIs.

### Use v2

#### Setup Client

```php
$client = \Lonnylot\Telnyx\V2\Client::getInstance('telnyxV2');
$client->setApiKey('<your key>');
```

#### Use Endpoints

```php
$client->numberSearch->all(['filter' => ['limit' => 3]]);
```
