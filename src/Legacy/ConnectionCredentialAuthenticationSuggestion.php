<?php

namespace Lonnylot\Telnyx\Legacy;

use CrudSugar\Concerns\IsEndpoint;

class ConnectionCredentialAuthenticationSuggestion {

  use IsEndpoint;

  public function boot() {
    $this->setPath('security/connections/{id}/credential_authentication/suggestion');
    $this->setResources(['show']);
    $this->setResourcePath('show', 'security/connections/{id}/credential_authentication/suggestion');
  }
}
