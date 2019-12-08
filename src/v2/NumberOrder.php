<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class NumberOrder {

  use IsEndpoint;

  public function boot() {
    $this->setPath('number_orders');
    $this->setResources(['index', 'store', 'show', 'update']);
    $this->setResourceMethod('update', 'PATCH');
  }
}
