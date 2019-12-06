<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class PhoneNumber {
  
  use IsEndpoint;

  public function boot() {
    $this->path = 'phone_numbers';
    $this->resources = ['index', 'delete', 'update'];
    $this->resourceMethods['update'] = 'PATCH';
  }
}
