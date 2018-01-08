<?php

namespace Diepxuan\Sitemap\Controller;

/**
 * Class Action
 * @package Diepxuan\Sitemap\Controller
 */
abstract class Action extends \Magento\Framework\App\Action\Action
{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $pageFactory;

    /**
     * Action constructor.
     *
     * @param \Magento\Framework\App\Action\Context      $context
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }
}
