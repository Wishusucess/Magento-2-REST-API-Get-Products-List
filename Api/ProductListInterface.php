<?php
/**
*
* Developer: Hemant Singh Magento 2x Developer
* Category:  Wishusucess_Customer
* Website:   http://www.wishusucess.com/
*/
namespace Wishusucess\ProductsList\Api;
/**
 * @api
 */
interface ProductListInterface
{
    /**
     * Get product list
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Catalog\Api\Data\ProductSearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}