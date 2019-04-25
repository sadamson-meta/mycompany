<?php
namespace MyCompany\MyModule\Controller\controllerpath;
/**
 * https://yoursite/frontname/controllerpath/somepage
 * The frontname value comes from routes.xml as is case sensitive
 * The controllerpath is defined by the folder name this file is in
 * The action path is the name of this class.
 *
 * This is an example of using pagefactory to load a layout file and its relevant block and template
 */
class SomePage extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}