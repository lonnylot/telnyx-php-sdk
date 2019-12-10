<?php

namespace Tests\Feature;

use Tests\TestCase;

class MessageTest extends TestCase {
  public function testStore() {
    // Given
    $client = $this->getClient();

    // When
    $response = $client->message->store(['from' => uniqid(), 'to' => uniqid(), 'text' => uniqid()]);

    // Then
    $this->assertTrue($response->isSuccessful());
  }

  public function testShow() {
    // Given
    $client = $this->getClient();

    // When
    $response = $client->messagingProfile->show(['id' => uniqid()]);

    // Then
    $this->assertTrue($response->isSuccessful());
  }
}
