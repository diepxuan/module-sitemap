<?php

namespace Diepxuan\Sitemap\Block;

/**
 * Class Sitemap
 * @package Diepxuan\Sitemap\Block
 */
class Sitemap extends \Magento\Framework\View\Element\Template
{
    protected $categoryHelper;
    protected $categoryFlatConfig;
    protected $categoryFactory;

    /**
     * Sitemap constructor.
     *
     * @param \Magento\Framework\View\Element\Template\Context   $context
     * @param \Magento\Catalog\Helper\Category                   $categoryHelper
     * @param \Magento\Catalog\Model\Indexer\Category\Flat\State $categoryFlatState
     * @param array                                              $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Helper\Category $categoryHelper,
        \Magento\Catalog\Model\Indexer\Category\Flat\State $categoryFlatState,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        array $data = []
    ) {

        $this->categoryHelper     = $categoryHelper;
        $this->categoryFlatConfig = $categoryFlatState;
        $this->categoryFactory    = $categoryFactory;
        parent::__construct($context, $data);
    }

    /**
     * Preparing layout
     *
     * @return $this
     */
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * Return categories helper
     */
    public function getCategoryHelper()
    {
        return $this->categoryHelper;
    }

    /**
     * Retrieve current store categories
     *
     * @param bool|string $sorted
     * @param bool        $asCollection
     * @param bool        $toLoad
     *
     * @return \Magento\Framework\Data\Tree\Node\Collection|\Magento\Catalog\Model\Resource\Category\Collection|array
     */
    public function getStoreCategories($sorted = false, $asCollection = false, $toLoad = true)
    {
        return $this->getCategoryHelper()->getStoreCategories($sorted, $asCollection, $toLoad);
    }

    /**
     * Retrieve child store categories
     *
     */
    public function getChildCategories($category)
    {
        if ($this->categoryFlatConfig->isFlatEnabled() && $category->getUseFlatResource()) {
            $subcategories = (array)$category->getChildrenNodes();
        } else {
            $subcategories = $category->getChildren();
        }

        return $subcategories;
    }

}
