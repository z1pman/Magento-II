<?php

namespace Owl\CustomModule\Model\Catalog;

use Magento\Catalog\Model\Product;



class Category extends \Magento\Catalog\Model\Category
{

    public function getText(Product $product)
    {

        $result = $product->getResource()->getAttribute('product_text')->getFrontend()->getValue($product);

        $this->_logger->debug($result);

        return $result;
    }

}