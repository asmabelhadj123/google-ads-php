<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/placement_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\PlacementTypeEnum;

/**
 * Possible placement types for a feed mapping.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.PlacementTypeEnum.PlacementType</code>
 */
class PlacementType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Websites(e.g. 'www.flowers4sale.com').
     *
     * Generated from protobuf enum <code>WEBSITE = 2;</code>
     */
    const WEBSITE = 2;
    /**
     * Mobile application categories(e.g. 'Games').
     *
     * Generated from protobuf enum <code>MOBILE_APP_CATEGORY = 3;</code>
     */
    const MOBILE_APP_CATEGORY = 3;
    /**
     * mobile applications(e.g. 'mobileapp::2-com.whatsthewordanswers').
     *
     * Generated from protobuf enum <code>MOBILE_APPLICATION = 4;</code>
     */
    const MOBILE_APPLICATION = 4;
    /**
     * YouTube videos(e.g. 'youtube.com/video/wtLJPvx7-ys').
     *
     * Generated from protobuf enum <code>YOUTUBE_VIDEO = 5;</code>
     */
    const YOUTUBE_VIDEO = 5;
    /**
     * YouTube channels(e.g. 'youtube.com::L8ZULXASCc1I_oaOT0NaOQ').
     *
     * Generated from protobuf enum <code>YOUTUBE_CHANNEL = 6;</code>
     */
    const YOUTUBE_CHANNEL = 6;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlacementType::class, \Google\Ads\GoogleAds\V1\Enums\PlacementTypeEnum_PlacementType::class);

