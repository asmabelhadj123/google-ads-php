<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2019 Google LLC.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
//
namespace Google\Ads\GoogleAds\V1\Services;

/**
 * Service to manage Managed Placement views.
 */
class ManagedPlacementViewServiceGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the requested Managed Placement view in full detail.
     * @param \Google\Ads\GoogleAds\V1\Services\GetManagedPlacementViewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetManagedPlacementView(\Google\Ads\GoogleAds\V1\Services\GetManagedPlacementViewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v1.services.ManagedPlacementViewService/GetManagedPlacementView',
        $argument,
        ['\Google\Ads\GoogleAds\V1\Resources\ManagedPlacementView', 'decode'],
        $metadata, $options);
    }

}
