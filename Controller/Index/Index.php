<?php

namespace Diepxuan\Sitemap\Controller\Index;

class Index extends \Diepxuan\Sitemap\Controller\Action
{
    public function execute()
    {
        $_resultPage = $this->resultPage->create();
        $_resultPage->getConfig()->getTitle()->prepend(__('Sitemap'));

        return $_resultPage;
    }
}
