<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Client as BaseClient;

class Client extends BaseClient {
  protected function __construct() {
    $this->setBaseUrl('https://api.telnyx.com/v2/');
    $this->registerEndpoints();
  }

  private function registerEndpoints() {
    $this->registerEndpointClass(NumberSearch::class);
  }
}
