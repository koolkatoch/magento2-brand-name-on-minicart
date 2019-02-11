<?php

namespace K2\BrandinMinicart\Plugin\Checkout\CustomerData;

class DefaultItem
{
    public function aroundGetItemData(
        \Magento\Checkout\CustomerData\AbstractItem $subject,
        \Closure $proceed,
        \Magento\Quote\Model\Quote\Item $item
    ) {
        $data = $proceed($item);
        $result['brand'] = $item->getProduct()->getAttributeText('brand');

        return \array_merge(
            $result,
            $data
        );
    }
}
