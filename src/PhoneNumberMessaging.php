<?php

namespace Lonnylot\Telnyx;

use CrudSugar\Concerns\IsEndpoint;

class PhoneNumberMessaging {

  use IsEndpoint;

  public function boot() {
    $this->setPath('phone_numbers/messaging');
    $this->setResources(['index', 'show', 'update']);
    $this->setResourceMethod('update', 'PATCH');
    $this->setResourcePath('show', 'phone_numbers/{id}/messaging');
    $this->setResourcePath('update', 'phone_numbers/{id}/messaging');
  }

  public function validateUpdateRules() {
    return [
      'messaging_profile_id' => ['uuid'],
      'messaging_product' => ['string'],
    ];
  }
}
