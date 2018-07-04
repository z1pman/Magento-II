<?php
/**
 * Created by PhpStorm.
 * User: zipman
 * Date: 27.06.18
 * Time: 12:30
 */

namespace Owl\CustomModule\Block;

//use Magento\Catalog\Model\Product;



class View extends \Magento\Catalog\Block\Product\View
{

    /**
     *
     */
    public function getCustomText()
    {
        $result = $this->getProduct()->getResource()->getAttributeRawValue($this->getProduct()->getId(), 'product_text', $this->_storeManager->getStore()->getId());
        return $result;
    }

}