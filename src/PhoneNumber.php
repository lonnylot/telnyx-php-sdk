<?php

namespace Lonnylot\Telnyx;

use CrudSugar\Concerns\IsEndpoint;

class PhoneNumber {

  use IsEndpoint;

  public function boot() {
    $this->setPath('phone_numbers');
    $this->setResources(['index', 'delete', 'update']);
    $this->setResourceMethod('update', 'PATCH');
  }

  public function validateIndexRules() {
    return [
      'page' => ['array'],
      'page.number' => ['integer'],
      'page.size' => ['integer'],
      'filter' => ['array'],
      'filter.tag' => ['string'],
      'filter.phone_number' => ['string'],
      'filter.status' => ['in:purchase-pending,purchase-failed,port-pending,port-failed,active,deleted,emergency-only,ported-out,port-out-pending'],
      'filter.voice\.connection_name' => ['array'],
      'filter.voice\.connection_name.contains' => ['string'],
      'filter.voice\.connection_name.starts_with' => ['string'],
      'filter.voice\.connection_name.ends_with' => ['string'],
      'filter.voice\.connection_name.eq' => ['string'],
      'filter.usage_payment_method' => ['string'],
      'filter.messaging\.messaging_profile_name' => ['array'],
      'filter.messaging\.messaging_profile_name.starts_with' => ['string'],
      'filter.messaging\.messaging_profile_name.ends_with' => ['string'],
      'filter.messaging\.messaging_profile_name.contains' => ['string'],
      'filter.messaging\.messaging_profile_name.eq' => ['string'],
      'sort' => ['string'],
    ];
  }

  public function validateUpdateRules() {
    return [
      'tags' => ['array'],
      'tags.*' => ['string'],
      'address_id' => ['string'],
      'external_pin' => ['string'],
      'connection_id' => ['string'],
      'billing_group_id' => ['string'],
    ];
  }
}
