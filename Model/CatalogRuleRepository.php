<?php

namespace MageSuite\CatalogRuleRestApi\Model;

/**
 * Class CatalogRuleRepository
 * @package MageSuite\CatalogRuleRestApi\Model
 */
class CatalogRuleRepository
    implements \MageSuite\CatalogRuleRestApi\Api\CatalogRuleRepositoryInterface
{

    /**
     * @var \Magento\CatalogRule\Model\CatalogRuleRepository
     */
    protected $catalogRuleRepository;

    /**
     * CatalogRuleRepository constructor.
     * @param \Magento\CatalogRule\Model\CatalogRuleRepository $catalogRuleRepository
     */
    public function __construct(\Magento\CatalogRule\Model\CatalogRuleRepository $catalogRuleRepository)
    {
        $this->catalogRuleRepository = $catalogRuleRepository;
    }

    /**
     * @param \MageSuite\CatalogRuleRestApi\Api\Data\CatalogRuleInterface $rule
     * @return \MageSuite\CatalogRuleRestApi\Api\Data\CatalogRuleInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(\MageSuite\CatalogRuleRestApi\Api\Data\CatalogRuleInterface $rule)
    {
        return $this->catalogRuleRepository->save($rule);
    }

    /**
     * @param int $ruleId
     * @return \MageSuite\CatalogRuleRestApi\Api\Data\CatalogRuleInterface|mixed
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get($ruleId)
    {
        return $this->catalogRuleRepository->get($ruleId);
    }

    /**
     * @param int $ruleId
     * @return bool
     */
    public function deleteById($ruleId)
    {
        $this->catalogRuleRepository->deleteById($ruleId);

        return true;
    }

}
