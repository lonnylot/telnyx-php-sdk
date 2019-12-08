<?php

namespace Tests\Feature;

use Tests\TestCase;
use Ramsey\Uuid\Uuid;

class PhoneNumberMessagingTest extends TestCase {
  public function testIndex() {
    // Given
    $client = $this->getClient();
    $data = [];

    // When
    $response = $client->phoneNumberMessaging->index($data);

    // Then
    $this->assertTrue($response->isSuccessful());
  }

  public function testUpdate() {
    // Given
    $client = $this->getClient();
    $data = [
      'id' => uniqid(),
      'messaging_profile_id' => Uuid::uuid4()->toString()
    ];

    // When
    $response = $client->phoneNumberMessaging->update($data);

    // Then
    $this->assertTrue($response->isSuccessful());
    $this->assertEquals($data['messaging_profile_id'], $response->getContent()['data']['messaging_profile_id']);
  }

  public function testShow() {
    // Given
    $client = $this->getClient();
    $data = [
      'id' => uniqid()
    ];

    // When
    $response = $client->phoneNumberMessaging->show($data);

    // Then
    $this->assertTrue($response->isSuccessful());
  }
}
