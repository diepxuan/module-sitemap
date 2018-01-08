<?php

namespace Diepxuan\Sitemap\Controller\Index;

/**
 * Class Index
 * @package Diepxuan\Sitemap\Controller\Index
 */
class Index extends \Diepxuan\Sitemap\Controller\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $_pageFactory = $this->pageFactory->create();
        $_pageFactory->getConfig()->getTitle()->prepend(__('Sitemap'));

        return $_pageFactory;
    }
}
