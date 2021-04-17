<?php
/**
 * @FishPig
 */
declare(strict_types=1);

namespace Magento\Wishlist\Model;

class Wishlist
{
    /**
     * Wishlist cache tag name
     */
    const CACHE_TAG = 'wishlist';

    /**
     * @return $this
     */
    public function loadByCustomerId($customerId, $create = false)
    {
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }

    /**
     * @return $this
     */
    public function loadByCode($code)
    {
        return $this;
    }
}
