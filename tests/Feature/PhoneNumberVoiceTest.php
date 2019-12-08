<?php

namespace Tests\Feature;

use Tests\TestCase;

class PhoneNumberVoiceTest extends TestCase {
  public function testIndex() {
    // Given
    $client = $this->getClient();
    $data = [];

    // When
    $response = $client->phoneNumberVoice->index($data);

    // Then
    $this->assertTrue($response->isSuccessful());
  }

  public function testUpdate() {
    // Given
    $client = $this->getClient();
    $data = [
      'id' => uniqid(),
      'tech_prefix_enabled' => true
    ];

    // When
    $response = $client->phoneNumberVoice->update($data);

    // Then
    $this->assertTrue($response->isSuccessful());
    $this->assertEquals($data['tech_prefix_enabled'], $response->getContent()['data']['tech_prefix_enabled']);
  }

  public function testShow() {
    // Given
    $client = $this->getClient();
    $data = [
      'id' => uniqid()
    ];

    // When
    $response = $client->phoneNumberVoice->show($data);

    // Then
    $this->assertTrue($response->isSuccessful());
  }
}
