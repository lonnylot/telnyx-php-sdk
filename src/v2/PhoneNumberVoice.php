<?php

namespace Lonnylot\Telnyx\V2;

use CrudSugar\Concerns\IsEndpoint;

class PhoneNumberVoice {

  use IsEndpoint;

  public function boot() {
    $this->setPath('phone_numbers/voice');
    $this->setResources(['index', 'show', 'update']);
    $this->setResourceMethod('update', 'PATCH');
    $this->setResourcePath('show', 'phone_numbers/{id}/voice');
    $this->setResourcePath('update', 'phone_numbers/{id}/voice');
  }

  public function validateIndexRules() {
    return [
      'page' => ['array'],
      'page.number' => ['integer'],
      'page.size' => ['integer'],
      'filter' => ['array'],
      'filter.phone_number' => ['string'],
      'filter.connection_name' => ['array'],
      'filter.connection_name.contains' => ['string'],
      'filter.usage_payment_method' => ['string'],
      'sort' => ['string']
    ];
  }

  public function validateUpdateRules() {
    return [
      'tech_prefix_enabled' => ['boolean'],
      'translated_number' => ['string'],
      'call_forwarding' => ['array'],
      'call_forwarding.forwards_to' => ['string'],
      'call_forwarding.forwarding_type' => ['in:always,on_failure,never'],
      'cnam_listing' => ['array'],
      'cnam_listing.cnam_listing_enabled' => ['boolean'],
      'cnam_listing.cnam_listing_details' => ['string'],
      'usage_payment_method' => ['in:pay-per-minute,channel'],
      'media_features' => ['array'],
      'media_features.rtp_auto_adjust_enabled' => ['boolean'],
      'media_features.media_handling_mode' => ['in:default,proxy'],
      'media_features.accept_any_rtp_packets_enabled' => ['boolean'],
      'media_features.t38_fax_gateway_enabled' => ['boolean'],
      'call_recording' => ['array'],
      'call_recording.inbound_call_recording_enabled' => ['boolean'],
      'call_recording.inbound_call_recording_format' => ['in:wav,mp3'],
      'call_recording.inbound_call_recording_channels' => ['in:single,dual'],
    ];
  }
}
