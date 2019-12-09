<?php

namespace Lonnylot\Telnyx\Legacy;

use CrudSugar\Client as BaseClient;

class Client extends BaseClient {
  protected function __construct() {
    $this->setBaseUrl('https://api.telnyx.com/');
    $this->registerEndpoints();
  }

  private function registerEndpoints() {
    $this->registerEndpointClass(Connection::class);
  }

  public function getUserAgent(): string {
    return 'telnyx-php-sdk/dev';
  }
}
