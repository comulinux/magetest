<?php

namespace Comulinux\ConfigurationModule\Model\Config\Backend;


class Image extends \Magento\Config\Model\Config\Backend\Image
{

    const UPLOAD_DIR = 'comulinux'; // Folder save image

    /**
     * Return path to directory for upload file
     *
     * @return string
     * @throw \Magento\Framework\Exception\LocalizedException
     */
    protected function _getUploadDir()
    {
        return $this->_mediaDirectory->getAbsolutePath($this->_appendScopeInfo(self::UPLOAD_DIR));
    }
}