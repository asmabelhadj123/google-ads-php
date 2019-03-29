<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/conversion_adjustment_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\ConversionAdjustmentTypeEnum;

/**
 * The different actions advertisers can take to adjust the conversions that
 * they already reported. Retractions negate a conversion. Restatements change
 * the value of a conversion.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentType</code>
 */
class ConversionAdjustmentType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Negates a conversion so that its total value and count are both zero.
     *
     * Generated from protobuf enum <code>RETRACTION = 2;</code>
     */
    const RETRACTION = 2;
    /**
     * Changes the value of a conversion.
     *
     * Generated from protobuf enum <code>RESTATEMENT = 3;</code>
     */
    const RESTATEMENT = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionAdjustmentType::class, \Google\Ads\GoogleAds\V1\Enums\ConversionAdjustmentTypeEnum_ConversionAdjustmentType::class);

