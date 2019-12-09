<?php

namespace Lonnylot\Telnyx\Legacy;

use CrudSugar\Concerns\IsEndpoint;

class ConnectionCredentialAuthentication {

  use IsEndpoint;

  public function boot() {
    $this->setPath('security/connections/{id}/credential_authentication/suggestion');
    $this->setResources(['update']);
    $this->setResourcePath('update', 'security/connections/{id}/credential_authentication/suggestion');
  }
}
