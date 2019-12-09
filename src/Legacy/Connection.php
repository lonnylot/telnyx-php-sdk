<?php

namespace Lonnylot\Telnyx\Legacy;

use CrudSugar\Concerns\IsEndpoint;

class Connection {

  use IsEndpoint;

  public function boot() {
    $this->setPath('security/connections');
    $this->setResources(['store']);
  }
}
