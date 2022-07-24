# MadMagentoModules

These are sample modules created based on several tutorials available on onternet. To name few:

https://store.magenest.com/blog/

https://www.mageplaza.com/

To deploy these modules run following command


php bin/magento module:status
php bin/magento module:enable MadMagentoModules_MyCustomProductType
php bin/magento indexer:reindex
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
php bin/magento cache:flush



php bin/magento module:status
php bin/magento module:enable MadMagentoModules_BackendMenuExample
php bin/magento indexer:reindex
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
php bin/magento cache:flush


php bin/magento module:status
php bin/magento module:enable MadMagentoModules_HelloWorld
php bin/magento indexer:reindex
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
php bin/magento cache:flush
