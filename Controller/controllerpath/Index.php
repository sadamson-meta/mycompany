<?php
namespace MyCompany\MyModule\Controller\controllerpath;
/**
 * https://yoursite/frontname/controllerpath/
 * The frontname value comes from routes.xml as is case sensitive
 * The controllerpath is defined by the folder name this file is in
 * The action path is the name of this class.
 * Index is a special case that is the default if it's not specified.
 *
 */

class Index extends \Magento\Framework\App\Action\Action
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
        echo "Hello from the Index controller!";
    }
}