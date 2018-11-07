<?php

namespace MageSuite\CatalogRuleRestApi\Model;

/**
 * Class CatalogRule
 * @package MageSuite\CatalogRuleRestApi\Model
 */
class CatalogRule
    extends \Magento\CatalogRule\Model\Rule
    implements \MageSuite\CatalogRuleRestApi\Api\Data\CatalogRuleInterface
{

    /**
     * Get a list of websites the rule applies to
     *
     * @return int[]
     */
    public function getWebsiteIds()
    {
        return $this->getData(self::KEY_WEBSITES);
    }

    /**
     * Set the websites the rule applies to
     *
     * @param int[] $websites
     * @return $this
     */
    public function setWebsiteIds(array $websites)
    {
        return $this->setData(self::KEY_WEBSITES, $websites);
    }

    /**
     * Get ids of customer groups that the rule applies to
     *
     * @return int[]
     */
    public function getCustomerGroupIds()
    {
        return $this->getData(self::KEY_CUSTOMER_GROUPS);
    }

    /**
     * Set the customer groups that the rule applies to
     *
     * @param int[] $customerGroups
     * @return $this
     */
    public function setCustomerGroupIds(array $customerGroups)
    {
        return $this->setData(self::KEY_CUSTOMER_GROUPS, $customerGroups);
    }

}