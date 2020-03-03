<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V3\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The reach curve for the planned products.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.ReachCurve</code>
 */
class ReachCurve extends \Google\Protobuf\Internal\Message
{
    /**
     * All points on the reach curve.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.services.ReachForecast reach_forecasts = 1;</code>
     */
    private $reach_forecasts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V3\Services\ReachForecast[]|\Google\Protobuf\Internal\RepeatedField $reach_forecasts
     *           All points on the reach curve.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * All points on the reach curve.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.services.ReachForecast reach_forecasts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReachForecasts()
    {
        return $this->reach_forecasts;
    }

    /**
     * All points on the reach curve.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.services.ReachForecast reach_forecasts = 1;</code>
     * @param \Google\Ads\GoogleAds\V3\Services\ReachForecast[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReachForecasts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V3\Services\ReachForecast::class);
        $this->reach_forecasts = $arr;

        return $this;
    }

}
