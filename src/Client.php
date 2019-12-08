<?php

namespace Lonnylot\Telnyx;

use CrudSugar\Client as BaseClient;

class Client extends BaseClient {
  protected function __construct() {
    $this->setBaseUrl('https://api.telnyx.com/v2/');
    $this->registerEndpoints();
  }

  private function registerEndpoints() {
    $this->registerEndpointClass(MessagingProfile::class);
    $this->registerEndpointClass(NumberOrder::class);
    $this->registerEndpointClass(NumberSearch::class);
    $this->registerEndpointClass(PhoneNumber::class);
    $this->registerEndpointClass(PhoneNumberMessaging::class);
    $this->registerEndpointClass(PhoneNumberVoice::class);
  }
}
