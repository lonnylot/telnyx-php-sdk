<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class PhoneNumber {

  use IsEndpoint;

  public function boot() {
    $this->setPath('phone_numbers');
    $this->setResources(['index', 'delete', 'update']);
    $this->setResourceMethod('update', 'PATCH');
  }
}
