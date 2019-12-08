<?php

namespace Tests\Feature;

use Tests\TestCase;

class NumberSearchTest extends TestCase {
  public function testCanMakeIndex() {
    // Given
    $client = $this->getClient();

    // When
    $response = $client->numberSearch->index();

    // Then
    $this->assertTrue($response->isSuccessful());
  }
}
