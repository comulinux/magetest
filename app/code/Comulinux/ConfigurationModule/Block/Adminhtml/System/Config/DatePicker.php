<?php

namespace Comulinux\ConfigurationModule\Block\Adminhtml\System\Config;


class DatePicker extends \Magento\Config\Block\System\Config\Form\Field
{
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $element->setDateFormat('yyyy-MM-dd');
        $element->setTimeFormat('HH:mm:ss');
        $element->setShowsTime(true);
        return parent::render($element);
    }
}