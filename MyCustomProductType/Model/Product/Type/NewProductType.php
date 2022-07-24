<?php
namespace MadMagentoModules\MyCustomProductType\Model\Product\Type;

class NewProductType extends \Magento\Catalog\Model\Product\Type\AbstractType
{
    const TYPE_CODE= 'new_product_type_code';

    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {

    }
}