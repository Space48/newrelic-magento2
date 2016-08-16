## New Relic Extension for Magento 2

To include this module in your Magento 2 project, your composer.json `minimum-stability` must be set to `dev`. Navigate to your project root and see the next section on how to install the component.

### How to Install

1) Include the module in your project:

````
composer config repositories.magento vcs https://github.com/space48/newrelic-magento2
````

2) Require the module in your composer file:

````
composer require space48/newrelic
```` 

3) Install module:

````
php bin/magento setup:upgrade
````

The component can be found in **vendor/space48/newrelic**

### Features

1. Disables New Relic when using currency switcher URL **directory/currency/switch**
