<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class PhoneNumberVoice {

  use IsEndpoint;

  public function boot() {
    $this->setPath('phone_numbers/voice');
    $this->setResources(['index', 'show', 'update']);
    $this->setResourceMethod('update', 'PATCH');
    $this->setResourcePath('show', 'phone_numbers/{id}/voice');
    $this->setResourcePath('update', 'phone_numbers/{id}/voice');
  }
}
