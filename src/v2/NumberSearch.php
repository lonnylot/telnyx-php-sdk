<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class NumberSearch {

  use IsEndpoint;

  public function boot() {
    $this->setPath('available_phone_numbers');
    $this->setResources(['index']);
  }

  public function validateIndexRules() {
    return [
      'filter' => ['array'],
      'filter.phone_number' => ['array'],
      'filter.phone_number.starts_with' => ['string'],
      'filter.phone_number.ends_with' => ['string'],
      'filter.phone_number.contains' => ['string'],
      'filter.locality' => ['string'],
      'filter.administrative_area' => ['string'],
      'filter.country_code' => ['string'],
      'filter.national_destination_code' => ['string'],
      'filter.rate_center' => ['string'],
      'filter.number_type' => ['string'],
      'filter.features' => ['array'],
      'filter.features.*' => ['in:voice,sms,mms,fax'],
      'filter.limit' => ['integer'],
      'filter.best_effort' => ['boolean'],
      'filter.quickship' => ['boolean'],
      'filter.reservable' => ['boolean'],
      'filter.exclude_regulatory_requirements' => ['exclude_regulatory_requirements']
    ];
  }
}
