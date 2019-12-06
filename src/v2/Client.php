<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Client as BaseClient;

class Client extends BaseClient {
  protected function __construct($name) {
    parent::__construct($name);

    $this->registerEndpoints();
  }

  private function registerEndpoints() {
    $this->registerEndpointClass(NumberSearch::class);
  }
}
