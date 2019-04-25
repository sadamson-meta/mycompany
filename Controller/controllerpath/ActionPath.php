<?php
namespace MyCompany\MyModule\Controller\controllerpath;
/**
 * https://yoursite/frontname/controllerpath/actionpath
 * The frontname value comes from routes.xml and is case sensitive
 * The controllerpath is defined by the folder name this file is in
 * The action path is the name of this class.
 * controllerpath and action path are not case sensitive. This URL will give you the same content:
 * https://yoursite/frontname/cOnTrollErpaTh/aCtionPaTH
 */
class ActionPath extends \Magento\Framework\App\Action\Action
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
        echo "Hello from the ActionPath controller!";
    }
}