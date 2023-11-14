<?php

namespace MageSuite\CatalogRuleRestApi\Api\Data;

/**
 * Interface CatalogRuleInterface
 * @package MageSuite\CatalogRuleRestApi\Api\Data
 */
interface CatalogRuleInterface
    extends \Magento\CatalogRule\Api\Data\RuleInterface
{

    const KEY_WEBSITES = 'website_ids';
    const KEY_CUSTOMER_GROUPS = 'customer_group_ids';

    /**
     * Get a list of websites the rule applies to
     *
     * @return int[]
     */
    public function getWebsiteIds();

    /**
     * Set the websites the rule applies to
     *
     * @param int[] $websiteIds
     * @return $this
     */
    public function setWebsiteIds(array $websiteIds);

    /**
     * Get ids of customer groups that the rule applies to
     *
     * @return int[]
     */
    public function getCustomerGroupIds();

    /**
     * Set the customer groups that the rule applies to
     *
     * @param int[] $customerGroupIds
     * @return $this
     */
    public function setCustomerGroupIds(array $customerGroupIds);

}
