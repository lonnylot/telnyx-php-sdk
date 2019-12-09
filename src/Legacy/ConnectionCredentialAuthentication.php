<?php

namespace Lonnylot\Telnyx\Legacy;

use CrudSugar\Concerns\IsEndpoint;

class ConnectionCredentialAuthentication {

  use IsEndpoint;

  public function boot() {
    $this->setPath('security/connections/{id}/credential_authentication');
    $this->setResources(['store']);
    $this->setResourcePath('store', 'security/connections/{id}/credential_authentication');
  }
}
