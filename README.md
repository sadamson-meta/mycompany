# Fake Module "My Module"

This faked out module contains a controller and template for your own custom path.

Put this code in [magento root]/app/code/MyCompany/Module then run:

bin/magento module:install MyCompany_MyModule

bin/magento setup:upgrade

Most of the value is in the per-file comments but the content is found on your magento site at:
https://yoursite/frontname/controllerpath/somepage

The components that are named the same can be assumed to be required to be named the same. In many cases developers will use name consistency, which is usually good, but I deliberately did not to highlight where they can differ.
