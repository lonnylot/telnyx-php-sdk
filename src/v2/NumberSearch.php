<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class NumberSearch {

  use IsEndpoint;

  public function boot() {
    $this->path = 'available_phone_numbers';
    $this->resources = ['index'];
  }
}
