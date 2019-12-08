<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class NumberOrder {

  use IsEndpoint;

  public function boot() {
    $this->setPath('number_orders');
    $this->setResources(['index', 'store', 'show', 'update']);
    $this->setResourceMethod('update', 'PATCH');
  }

  public function validateIndexRules() {
    return [
      'filter' => ['array'],
      'filter.status' => ['in:pending,success,failure'],
      'filter.created_at' => ['array'],
      'filter.created_at.lt' => ['date'],
      'filter.created_at.gt' => ['date'],
      'filter.phone_numbers\.phone_number' => ['array'],
      'filter.phone_numbers\.phone_number.*' => ['string'],
      'filter.customer_reference' => ['string'],
      'filter.requirements_met' => ['boolean'],
    ];
  }

  public function validateStoreRules() {
    return [
      'phone_numbers' => ['required', 'array'],
      'phone_numbers.*.phone_number' => ['required', 'string'],
      'phone_numbers.*.regulatory_requirements' => ['array'],
      'phone_numbers.*.regulatory_requirements.record_type' => ['string'],
      'phone_numbers.*.regulatory_requirements.requirement_id' => ['uuid'],
      'phone_numbers.*.regulatory_requirements.field_value' => ['string'],
      'phone_numbers.*.regulatory_requirements.field_type' => ['in:string,datetime,address_id,number_order_document_id'],
      'customer_reference' => ['string'],
      'connection_id' => ['string'],
      'messaging_profile_id' => ['uuid'],
      'webhook_url' => ['url'],
      'webhook_failover_url' => ['url']
    ];
  }

  public function validateUpdateRules() {
    return [
      'phone_numbers' => ['array'],
      'phone_numbers.*.phone_number' => ['string'],
      'phone_numbers.*.regulatory_requirements' => ['array'],
      'phone_numbers.*.regulatory_requirements.record_type' => ['string'],
      'phone_numbers.*.regulatory_requirements.requirement_id' => ['uuid'],
      'phone_numbers.*.regulatory_requirements.field_value' => ['string'],
      'phone_numbers.*.regulatory_requirements.field_type' => ['in:string,datetime,address_id,number_order_document_id'],
      'customer_reference' => ['string'],
      'connection_id' => ['string'],
      'messaging_profile_id' => ['uuid'],
      'webhook_url' => ['url'],
      'webhook_failover_url' => ['url']
    ];
  }
}
