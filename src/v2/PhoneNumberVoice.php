<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class PhoneNumberVoice {

  use IsEndpoint;

  public function boot() {
    $this->path = 'phone_numbers/voice';
    $this->resources = ['index', 'show', 'update'];
    $this->resourceMethods['update'] = 'PATCH';
    $this->resourcePaths = [
      'show' => 'phone_numbers/{id}/voice',
      'update' => 'phone_numbers/{id}/voice'
    ];
  }
}
