<?php
/**
 * Tells Magento about the existence of this module
 * Boilerplate except the fourth line, the module name
 */
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'MyCompany_MyModule',
    __DIR__
);