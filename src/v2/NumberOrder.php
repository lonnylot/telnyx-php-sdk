<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class NumberOrder {

  use IsEndpoint;

  public function boot() {
    $this->path = 'number_orders';
    $this->resources = ['index', 'store', 'show', 'update'];
    $this->resourceMethods['update'] = 'PATCH';
  }
}
