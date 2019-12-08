<?php

namespace Tests\Feature;

use Tests\TestCase;

class PhoneNumberTest extends TestCase {
  public function testIndex() {
    // Given
    $client = $this->getClient();
    $data = [];

    // When
    $response = $client->phoneNumber->index($data);

    // Then
    $this->assertTrue($response->isSuccessful());
  }

  public function testUpdate() {
    // Given
    $client = $this->getClient();
    $data = [
      'id' => uniqid(),
      'connection_id' => uniqid()
    ];

    // When
    $response = $client->phoneNumber->update($data);

    // Then
    $this->assertTrue($response->isSuccessful());
    $this->assertEquals($data['connection_id'], $response->getContent()['data']['connection_id']);
  }

  public function testDelete() {
    // Given
    $client = $this->getClient();
    $data = [
      'id' => uniqid()
    ];

    // When
    $response = $client->phoneNumber->delete($data);

    // Then
    $this->assertTrue($response->isSuccessful());
  }
}
