<?php

namespace Tests\Feature;

use Tests\TestCase;

class MessagingProfilesTest extends TestCase {
  public function testIndex() {
    // Given
    $client = $this->getClient();

    // When
    $response = $client->messagingProfile->index();

    // Then
    $this->assertTrue($response->isSuccessful());
  }

  public function testStore() {
    // Given
    $client = $this->getClient();

    // When
    $response = $client->messagingProfile->store(['name' => uniqid()]);

    // Then
    $this->assertTrue($response->isSuccessful());
  }

  public function testDelete() {
    // Given
    $client = $this->getClient();

    // When
    $response = $client->messagingProfile->delete(['id' => uniqid()]);

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

  public function testUpdate() {
    // Given
    $client = $this->getClient();
    $data = [
      'id' => uniqid(),
      'name' => uniqid()
    ];

    // When
    $response = $client->messagingProfile->update($data);

    // Then
    $this->assertTrue($response->isSuccessful());
    $this->assertEquals($data['name'], $response->getContent()['data']['name']);
  }
}
