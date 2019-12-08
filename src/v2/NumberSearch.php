<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class NumberSearch {

  use IsEndpoint;

  public function boot() {
    $this->setPath('available_phone_numbers');
    $this->setResources(['index']);
  }
}
