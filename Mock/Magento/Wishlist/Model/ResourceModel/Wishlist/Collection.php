<?php
/**
 *
 */
namespace Magento\Wishlist\Model\ResourceModel\Wishlist;

class Collection extends \Magento\Framework\Data\Collection
{
    /**
     *
     */
    public function filterByCustomerId(): self
    {
        return $this;
    }
}
