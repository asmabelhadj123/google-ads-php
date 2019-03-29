<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.Recommendation</code>
 */
class Recommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the recommendation.
     * `customers/{customer_id}/recommendations/{recommendation_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The type of recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.RecommendationTypeEnum.RecommendationType type = 2;</code>
     */
    private $type = 0;
    /**
     * The impact on account performance as a result of applying the
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.RecommendationImpact impact = 3;</code>
     */
    private $impact = null;
    /**
     * The budget targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign budget.
     * This field will be set for the following recommendation types:
     * CAMPAIGN_BUDGET
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 5;</code>
     */
    private $campaign_budget = null;
    /**
     * The campaign targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign.
     * This field will be set for the following recommendation types:
     * ENHANCED_CPC_OPT_IN, KEYWORD, MAXIMIZE_CLICKS_OPT_IN,
     * MAXIMIZE_CONVERSIONS_OPT_IN, OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN,
     * TARGET_CPA_OPT_IN, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 6;</code>
     */
    private $campaign = null;
    /**
     * The ad group targeted by this recommendation. This will be set only when
     * the recommendation affects a single ad group.
     * This field will be set for the following recommendation types:
     * KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 7;</code>
     */
    private $ad_group = null;
    /**
     * Whether the recommendation is dismissed or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue dismissed = 13;</code>
     */
    private $dismissed = null;
    protected $recommendation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the recommendation.
     *           `customers/{customer_id}/recommendations/{recommendation_id}`
     *     @type int $type
     *           The type of recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\RecommendationImpact $impact
     *           The impact on account performance as a result of applying the
     *           recommendation.
     *     @type \Google\Protobuf\StringValue $campaign_budget
     *           The budget targeted by this recommendation. This will be set only when
     *           the recommendation affects a single campaign budget.
     *           This field will be set for the following recommendation types:
     *           CAMPAIGN_BUDGET
     *     @type \Google\Protobuf\StringValue $campaign
     *           The campaign targeted by this recommendation. This will be set only when
     *           the recommendation affects a single campaign.
     *           This field will be set for the following recommendation types:
     *           ENHANCED_CPC_OPT_IN, KEYWORD, MAXIMIZE_CLICKS_OPT_IN,
     *           MAXIMIZE_CONVERSIONS_OPT_IN, OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN,
     *           TARGET_CPA_OPT_IN, TEXT_AD
     *     @type \Google\Protobuf\StringValue $ad_group
     *           The ad group targeted by this recommendation. This will be set only when
     *           the recommendation affects a single ad group.
     *           This field will be set for the following recommendation types:
     *           KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
     *     @type \Google\Protobuf\BoolValue $dismissed
     *           Whether the recommendation is dismissed or not.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\CampaignBudgetRecommendation $campaign_budget_recommendation
     *           The campaign budget recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\KeywordRecommendation $keyword_recommendation
     *           The keyword recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\TextAdRecommendation $text_ad_recommendation
     *           Add expanded text ad recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\TargetCpaOptInRecommendation $target_cpa_opt_in_recommendation
     *           The TargetCPA opt-in recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\MaximizeConversionsOptInRecommendation $maximize_conversions_opt_in_recommendation
     *           The MaximizeConversions Opt-In recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\EnhancedCpcOptInRecommendation $enhanced_cpc_opt_in_recommendation
     *           The Enhanced Cost-Per-Click Opt-In recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\SearchPartnersOptInRecommendation $search_partners_opt_in_recommendation
     *           The Search Partners Opt-In recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\MaximizeClicksOptInRecommendation $maximize_clicks_opt_in_recommendation
     *           The MaximizeClicks Opt-In recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\OptimizeAdRotationRecommendation $optimize_ad_rotation_recommendation
     *           The Optimize Ad Rotation recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\KeywordMatchTypeRecommendation $keyword_match_type_recommendation
     *           The keyword match type recommendation.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\MoveUnusedBudgetRecommendation $move_unused_budget_recommendation
     *           The move unused budget recommendation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the recommendation.
     * `customers/{customer_id}/recommendations/{recommendation_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the recommendation.
     * `customers/{customer_id}/recommendations/{recommendation_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The type of recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.RecommendationTypeEnum.RecommendationType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.RecommendationTypeEnum.RecommendationType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\RecommendationTypeEnum_RecommendationType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The impact on account performance as a result of applying the
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.RecommendationImpact impact = 3;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\RecommendationImpact
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * The impact on account performance as a result of applying the
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.RecommendationImpact impact = 3;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\RecommendationImpact $var
     * @return $this
     */
    public function setImpact($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_RecommendationImpact::class);
        $this->impact = $var;

        return $this;
    }

    /**
     * The budget targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign budget.
     * This field will be set for the following recommendation types:
     * CAMPAIGN_BUDGET
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaignBudget()
    {
        return $this->campaign_budget;
    }

    /**
     * The budget targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign budget.
     * This field will be set for the following recommendation types:
     * CAMPAIGN_BUDGET
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaignBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign_budget = $var;

        return $this;
    }

    /**
     * The campaign targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign.
     * This field will be set for the following recommendation types:
     * ENHANCED_CPC_OPT_IN, KEYWORD, MAXIMIZE_CLICKS_OPT_IN,
     * MAXIMIZE_CONVERSIONS_OPT_IN, OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN,
     * TARGET_CPA_OPT_IN, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * The campaign targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign.
     * This field will be set for the following recommendation types:
     * ENHANCED_CPC_OPT_IN, KEYWORD, MAXIMIZE_CLICKS_OPT_IN,
     * MAXIMIZE_CONVERSIONS_OPT_IN, OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN,
     * TARGET_CPA_OPT_IN, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * The ad group targeted by this recommendation. This will be set only when
     * the recommendation affects a single ad group.
     * This field will be set for the following recommendation types:
     * KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * The ad group targeted by this recommendation. This will be set only when
     * the recommendation affects a single ad group.
     * This field will be set for the following recommendation types:
     * KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Whether the recommendation is dismissed or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue dismissed = 13;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getDismissed()
    {
        return $this->dismissed;
    }

    /**
     * Whether the recommendation is dismissed or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue dismissed = 13;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setDismissed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->dismissed = $var;

        return $this;
    }

    /**
     * The campaign budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.CampaignBudgetRecommendation campaign_budget_recommendation = 4;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\CampaignBudgetRecommendation
     */
    public function getCampaignBudgetRecommendation()
    {
        return $this->readOneof(4);
    }

    /**
     * The campaign budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.CampaignBudgetRecommendation campaign_budget_recommendation = 4;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\CampaignBudgetRecommendation $var
     * @return $this
     */
    public function setCampaignBudgetRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_CampaignBudgetRecommendation::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The keyword recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.KeywordRecommendation keyword_recommendation = 8;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\KeywordRecommendation
     */
    public function getKeywordRecommendation()
    {
        return $this->readOneof(8);
    }

    /**
     * The keyword recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.KeywordRecommendation keyword_recommendation = 8;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\KeywordRecommendation $var
     * @return $this
     */
    public function setKeywordRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_KeywordRecommendation::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Add expanded text ad recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.TextAdRecommendation text_ad_recommendation = 9;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\TextAdRecommendation
     */
    public function getTextAdRecommendation()
    {
        return $this->readOneof(9);
    }

    /**
     * Add expanded text ad recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.TextAdRecommendation text_ad_recommendation = 9;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\TextAdRecommendation $var
     * @return $this
     */
    public function setTextAdRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_TextAdRecommendation::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * The TargetCPA opt-in recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.TargetCpaOptInRecommendation target_cpa_opt_in_recommendation = 10;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\TargetCpaOptInRecommendation
     */
    public function getTargetCpaOptInRecommendation()
    {
        return $this->readOneof(10);
    }

    /**
     * The TargetCPA opt-in recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.TargetCpaOptInRecommendation target_cpa_opt_in_recommendation = 10;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\TargetCpaOptInRecommendation $var
     * @return $this
     */
    public function setTargetCpaOptInRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_TargetCpaOptInRecommendation::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * The MaximizeConversions Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.MaximizeConversionsOptInRecommendation maximize_conversions_opt_in_recommendation = 11;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\MaximizeConversionsOptInRecommendation
     */
    public function getMaximizeConversionsOptInRecommendation()
    {
        return $this->readOneof(11);
    }

    /**
     * The MaximizeConversions Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.MaximizeConversionsOptInRecommendation maximize_conversions_opt_in_recommendation = 11;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\MaximizeConversionsOptInRecommendation $var
     * @return $this
     */
    public function setMaximizeConversionsOptInRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_MaximizeConversionsOptInRecommendation::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * The Enhanced Cost-Per-Click Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.EnhancedCpcOptInRecommendation enhanced_cpc_opt_in_recommendation = 12;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\EnhancedCpcOptInRecommendation
     */
    public function getEnhancedCpcOptInRecommendation()
    {
        return $this->readOneof(12);
    }

    /**
     * The Enhanced Cost-Per-Click Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.EnhancedCpcOptInRecommendation enhanced_cpc_opt_in_recommendation = 12;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\EnhancedCpcOptInRecommendation $var
     * @return $this
     */
    public function setEnhancedCpcOptInRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_EnhancedCpcOptInRecommendation::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * The Search Partners Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.SearchPartnersOptInRecommendation search_partners_opt_in_recommendation = 14;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\SearchPartnersOptInRecommendation
     */
    public function getSearchPartnersOptInRecommendation()
    {
        return $this->readOneof(14);
    }

    /**
     * The Search Partners Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.SearchPartnersOptInRecommendation search_partners_opt_in_recommendation = 14;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\SearchPartnersOptInRecommendation $var
     * @return $this
     */
    public function setSearchPartnersOptInRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_SearchPartnersOptInRecommendation::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * The MaximizeClicks Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.MaximizeClicksOptInRecommendation maximize_clicks_opt_in_recommendation = 15;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\MaximizeClicksOptInRecommendation
     */
    public function getMaximizeClicksOptInRecommendation()
    {
        return $this->readOneof(15);
    }

    /**
     * The MaximizeClicks Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.MaximizeClicksOptInRecommendation maximize_clicks_opt_in_recommendation = 15;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\MaximizeClicksOptInRecommendation $var
     * @return $this
     */
    public function setMaximizeClicksOptInRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_MaximizeClicksOptInRecommendation::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * The Optimize Ad Rotation recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.OptimizeAdRotationRecommendation optimize_ad_rotation_recommendation = 16;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\OptimizeAdRotationRecommendation
     */
    public function getOptimizeAdRotationRecommendation()
    {
        return $this->readOneof(16);
    }

    /**
     * The Optimize Ad Rotation recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.OptimizeAdRotationRecommendation optimize_ad_rotation_recommendation = 16;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\OptimizeAdRotationRecommendation $var
     * @return $this
     */
    public function setOptimizeAdRotationRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_OptimizeAdRotationRecommendation::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * The keyword match type recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.KeywordMatchTypeRecommendation keyword_match_type_recommendation = 20;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\KeywordMatchTypeRecommendation
     */
    public function getKeywordMatchTypeRecommendation()
    {
        return $this->readOneof(20);
    }

    /**
     * The keyword match type recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.KeywordMatchTypeRecommendation keyword_match_type_recommendation = 20;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\KeywordMatchTypeRecommendation $var
     * @return $this
     */
    public function setKeywordMatchTypeRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_KeywordMatchTypeRecommendation::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * The move unused budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.MoveUnusedBudgetRecommendation move_unused_budget_recommendation = 21;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\MoveUnusedBudgetRecommendation
     */
    public function getMoveUnusedBudgetRecommendation()
    {
        return $this->readOneof(21);
    }

    /**
     * The move unused budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.MoveUnusedBudgetRecommendation move_unused_budget_recommendation = 21;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\MoveUnusedBudgetRecommendation $var
     * @return $this
     */
    public function setMoveUnusedBudgetRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_MoveUnusedBudgetRecommendation::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRecommendation()
    {
        return $this->whichOneof("recommendation");
    }

}

