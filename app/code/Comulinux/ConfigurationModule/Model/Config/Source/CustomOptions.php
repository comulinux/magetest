<?php

namespace Comulinux\ConfigurationModule\Model\Config\Source;

/**
 * Class CustomOptions
 * This class is used as example of source model for options fields.
 * Implements ArrayInterface interface that at same time extends OptionSourceInterface (where toOptionArray method is
 * declared)
 * 
 * @package Comulinux\ConfigurationModule\Model\Config\Source
 */
class CustomOptions implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'value1', 'label'  => __('Custom option 1')],
            ['value' => 'value2', 'label'  => __('Custom option 2')]
        ];
    }
}