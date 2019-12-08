# Introduction

This is an SDK for the [Telnyx API v2](https://developers.telnyx.com/docs/api/v2/)

> **NOTE** Because the v2 API is still in development some of the [v1](https://developers.telnyx.com/docs/api/v1/) endpoints will exist in the `\Lonnylot\Telnyx\Legacy` namespace.

## Installation

### Composer

You can install the bindings via Composer. Run the following command:

`composer require lonnylot/telnyx-php-sdk dev-master`

To use the bindings, use Composer's autoload:

`require_once('vendor/autoload.php');`

### Laravel

To use with Laravel you need to set your Telnyx API key in `app/config/services.php`

```php
[
  'telnyx' => [
    'api_key' => env('TELNYX_API_KEY', ''),
  ]
]
```

Now you can dependency inject `\Lonnylot\Telnyx\Client` in your Laravel application and it will be ready to use.

## Dependencies

The library requires the [CrudSugar](https://github.com/lonnylot/crud-sugar/) library.

## Getting Started

This library was made so you can interact with the Telnyx APIs.

**Table of Contents**

1. [Setup Client](#setup-client)
1. [Available Resources](#available-resources)
1. [Available Endpoints](#available-endpoints)
1. [Use Endpoint](#use-endpoint)

### Available Resources

The resources are named as follows:

1. `index` - Telnyx "List"
1. `show` - Telnyx "Retrieve"
1. `update` - Telnyx "Update"
1. `delete` - Telnyx "Delete"
1. `store` - Telnyx "Create"

### Available Endpoints

1. `messagingProfile`
1. `numberOrder`
1. `numberSearch`
1. `phoneNumber`
1. `phoneNumberMessaging`
1. `phoneNumberVoice`

### Setup Client

```php
$client = \Lonnylot\Telnyx\Client::getInstance('telnyx');
$client->setApiKey('<your key>');
```

### Use Endpoint

To use an endpoint you simply call the endpoint from your client followed by the resource you want to use.

> **NOTE** Keep in mind the resource mapping in the [Available Resources](#available-resources) section

```php
$client->numberSearch->index(['filter' => ['limit' => 3, 'features' => ['sms', 'mms']]]);
```
