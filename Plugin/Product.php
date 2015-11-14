<?php

namespace Alger\Skeleton\Plugin;

use Magento\Catalog\Model\Product as Target;

class Product
{
    public function afterGetName(Target $subject, $result)
    {
        return 'AWESOME << ' . $result . ' >> UNICORN';
    }
}
