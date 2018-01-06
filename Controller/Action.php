<?php

namespace Diepxuan\Sitemap\Controller;

abstract class Action extends \Magento\Framework\App\Action\Action
{

    protected $resultPage = null;

    /*
     * Constructor
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPage
    ) {
        $this->resultPage = $resultPage;

        parent::__construct($context);
    }
}
