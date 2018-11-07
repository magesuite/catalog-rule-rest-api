<?php

namespace MageSuite\CatalogRuleRestApi\Api;

/**
 * Interface CatalogRuleRepositoryInterface
 * @package MageSuite\CatalogRuleRestApi\Api
 */
interface CatalogRuleRepositoryInterface
{

    /**
     * @param \MageSuite\CatalogRuleRestApi\Api\Data\CatalogRuleInterface $rule
     * @return \MageSuite\CatalogRuleRestApi\Api\Data\CatalogRuleInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @since 100.1.0
     */
    public function save(\MageSuite\CatalogRuleRestApi\Api\Data\CatalogRuleInterface $rule);

    /**
     * @param int $ruleId
     * @return \MageSuite\CatalogRuleRestApi\Api\Data\CatalogRuleInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @since 100.1.0
     */
    public function get($ruleId);

    /**
     * @param int $ruleId
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     * @since 100.1.0
     */
    public function deleteById($ruleId);

}
