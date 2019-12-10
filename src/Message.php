<?php

namespace Lonnylot\Telnyx;

use CrudSugar\Concerns\IsEndpoint;

class Message {

  use IsEndpoint;

  public function boot() {
    $this->setPath('messages');
    $this->setResources(['store', 'show']);
  }

  public function validateStoreRules() {
    return [
      'from' => ['required_without:messaging_profile_id', 'string'],
      'messaging_profile_id' => ['required_without:from', 'string'],
      'to' => ['string'],
      'text' => ['required_without:media_urls', 'string'],
      'subject' => ['string'],
      'media_urls' => ['array'],
      'media_urls.*' => ['url'],
      'webhook_url' => ['url'],
      'webhook_failover_url' => ['url'],
      'use_profile_webhooks' => ['boolean'],
    ];
  }
}
