<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class MessagingProfile {

  use IsEndpoint;

  public function boot() {
    $this->setPath('messaging_profiles');
    $this->setResources(['index', 'store', 'delete', 'show', 'update']);
    $this->setResourceMethod('update', 'PATCH');
  }
}
