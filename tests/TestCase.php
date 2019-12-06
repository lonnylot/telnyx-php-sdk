<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Lonnylot\Telnyx\V2\Client;

abstract class TestCase extends BaseTestCase {
  protected function setUp(): void {
    $this->getClient()->setBaseUrl('http://localhost:12111/v2/');
    $this->getClient()->setApiKey('KEYSUPERSECRET');
  }

  protected function tearDown(): void {
    $this->getClient()->reset();
  }

  public function getClient() {
    return Client::getInstance('Test');
  }
}
