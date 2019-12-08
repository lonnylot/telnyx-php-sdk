<?php

namespace Lonnylot\Telnyx;

use CrudSugar\Concerns\IsEndpoint;

class MessagingProfile {

  use IsEndpoint;

  public function boot() {
    $this->setPath('messaging_profiles');
    $this->setResources(['index', 'store', 'delete', 'show', 'update']);
    $this->setResourceMethod('update', 'PATCH');
  }

  public function validateIndexRules() {
    return [
      'page.number' => ['integer'],
      'page.size' => ['integer']
    ];
  }

  public function validateStoreRules() {
    return [
      'name' => ['required', 'string'],
      'enabled' => ['boolean'],
      'webhook_url' => ['url'],
      'webhook_failover_url' => ['url'],
      'webhook_api_version' => ['in:1,2,2010-04-01'],
      'number_pool_settings' => ['array'],
      'number_pool_settings.toll_free_weight' => ['integer'],
      'number_pool_settings.long_code_weight' => ['integer'],
      'number_pool_settings.skip_unhealthy' => ['boolean'],
      'number_pool_settings.sticky_sender' => ['boolean'],
      'number_pool_settings.geomatch' => ['boolean'],
      'url_shortener_settings' => ['array'],
      'url_shortener_settings.domain' => ['string'],
      'url_shortener_settings.prefix' => ['string'],
      'url_shortener_settings.replace_blacklist_only' => ['boolean'],
      'url_shortener_settings.send_webhooks' => ['boolean'],
    ];
  }

  public function validateUpdateRules() {
    return [
      'name' => ['required', 'string'],
      'enabled' => ['boolean'],
      'webhook_url' => ['url'],
      'webhook_failover_url' => ['url'],
      'webhook_api_version' => ['in:1,2,2010-04-01'],
      'whitelisted_destinations' => ['nullable', 'array'],
      'whitelisted_destinations.*' => ['string'],
      'v1_secret' => ['string'],
      'number_pool_settings' => ['array'],
      'number_pool_settings.toll_free_weight' => ['integer'],
      'number_pool_settings.long_code_weight' => ['integer'],
      'number_pool_settings.skip_unhealthy' => ['boolean'],
      'number_pool_settings.sticky_sender' => ['boolean'],
      'number_pool_settings.geomatch' => ['boolean'],
      'url_shortener_settings' => ['array'],
      'url_shortener_settings.domain' => ['string'],
      'url_shortener_settings.prefix' => ['string'],
      'url_shortener_settings.replace_blacklist_only' => ['boolean'],
      'url_shortener_settings.send_webhooks' => ['boolean'],
    ];
  }
}
