<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class PhoneNumberMessaging {

  use IsEndpoint;

  public function boot() {
    $this->path = 'phone_numbers/messaging';
    $this->resources = ['index', 'show', 'update'];
    $this->resourceMethods['update'] = 'PATCH';
    $this->resourcePaths = [
      'show' => 'phone_numbers/{id}/messaging',
      'update' => 'phone_numbers/{id}/messaging'
    ];
  }
}
