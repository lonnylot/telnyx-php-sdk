<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class MessagingProfile {

  use IsEndpoint;

  public function boot() {
    $this->path = 'messaging_profiles';
    $this->resources = ['index', 'store', 'delete', 'show', 'update'];
    $this->resourceMethods['update'] = 'PATCH';
  }
}
