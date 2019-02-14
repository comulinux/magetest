<?php


namespace Comulinux\ConfigurationModule\Model\Config\Backend;


class Gallery extends \Magento\Framework\App\Config\Value
{
    public function beforeSave()
    {
        $data = $this->getValue();
        if (is_array($data)) {
            $this->setValue(implode(',', $data));
        }
    }
}