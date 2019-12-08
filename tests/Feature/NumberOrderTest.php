<?php

namespace Tests\Feature;

use Tests\TestCase;

class NumberOrderTest extends TestCase {
  public function testIndex() {
    // Given
    $client = $this->getClient();
    $data = [];

    // When
    $response = $client->numberOrder->index($data);

    // Then
    $this->assertTrue($response->isSuccessful());
  }

  public function testStore() {
    // Given
    $client = $this->getClient();
    $data = [
      'phone_numbers' => [
        [
          'phone_number' => uniqid()
        ]
      ],
      'customer_reference' => uniqid()
    ];

    // When
    $response = $client->numberOrder->store($data);

    // Then
    $this->assertTrue($response->isSuccessful());
    $this->assertEquals($data['customer_reference'], $response->getContent()['data']['customer_reference']);
  }

  public function testShow() {
    // Given
    $client = $this->getClient();
    $data = ['id' => uniqid()];

    // When
    $response = $client->numberOrder->show($data);

    // Then
    $this->assertTrue($response->isSuccessful());
    $this->assertEquals($data['id'], $response->getContent()['data']['id']);
  }

  public function testUpdate() {
    // Given
    $client = $this->getClient();
    $data = [
      'id' => uniqid(),
      'customer_reference' => uniqid()
    ];

    // When
    $response = $client->numberOrder->update($data);

    // Then
    $this->assertTrue($response->isSuccessful());
    $this->assertEquals($data['customer_reference'], $response->getContent()['data']['customer_reference']);
  }
}
