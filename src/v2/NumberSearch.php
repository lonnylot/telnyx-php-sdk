<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class NumberSearch implements Endpoint {

  use IsEndpoint;

  private $path = 'available_phone_numbers';

  public function all($params = []) {
    return $this->client->request('GET', $this->path, $params);
  }
}
