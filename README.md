# MadMagentoModules

Credits:
https://store.magenest.com/blog/

https://www.mageplaza.com/

For Windows: Download the whole folder (MadMagentoModules) and put it under magento deployment folder\app\code and run following set of commands to deploy.

-----------------------------------------------------------------------------------------------------------
php bin/magento module:status

php bin/magento module:enable MadMagentoModules_MyCustomProductType

php bin/magento indexer:reindex

php bin/magento setup:upgrade

php bin/magento setup:static-content:deploy -f

php bin/magento cache:clean

php bin/magento cache:flush


-----------------------------------------------------------------------------------------------------------
php bin/magento module:status

php bin/magento module:enable MadMagentoModules_BackendMenuExample

php bin/magento indexer:reindex

php bin/magento setup:upgrade

php bin/magento setup:static-content:deploy -f

php bin/magento cache:clean

php bin/magento cache:flush

-----------------------------------------------------------------------------------------------------------
php bin/magento module:status

php bin/magento module:enable MadMagentoModules_HelloWorld

php bin/magento indexer:reindex

php bin/magento setup:upgrade

php bin/magento setup:static-content:deploy -f

php bin/magento cache:clean

php bin/magento cache:flush

