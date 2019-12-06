<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\Endpoints;

class NumberSearch implements Endpoints {
  private $client;

  private $endpoint = 'available_phone_numbers';

  public function __construct(Client $client) {
    $this->client = $client;
  }

  public function all($params = []) {
    return $this->client->request('GET', $this->endpoint, $params);
  }
}
