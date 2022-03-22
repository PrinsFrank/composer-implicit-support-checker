# composer-implicit-support-checker
Checks for packages that don't explicitly support your current PHP version

## Installation

To get started, require the plugin globally;

```shell
composer require prinsfrank/composer-implicit-support-checker --global
```

Or as a temporary dev dependency in the package you want to prepare for a PHP update;
```shell
composer require prinsfrank/composer-implicit-support-checker --dev
```

## Check your package

Run the following command to check for any implicit PHP support;
```shell
composer check-implicit-support
```

The output will look as follows;
```log
fprins@localhost:/mnt/c/projects/IndentingPersistentBladeCompiler$ composer check-implicit-support
Checking implicit support in required packages
Package "egulias/email-validator" implicitly supports the current PHP version (>=5.5)
Package "monolog/monolog" implicitly supports the current PHP version (>=7.2)
Package "nette/schema" implicitly supports the current PHP version (>=7.1 <8.2)
Package "nette/utils" implicitly supports the current PHP version (>=7.2 <8.2)
Package "psr/container" implicitly supports the current PHP version (>=7.4.0)
Package "psr/event-dispatcher" implicitly supports the current PHP version (>=7.2.0)
Package "psr/simple-cache" implicitly supports the current PHP version (>=5.3.0)
Package "ramsey/collection" implicitly supports the current PHP version (^7.3 || ^8)
Package "swiftmailer/swiftmailer" implicitly supports the current PHP version (>=7.0.0)
Package "symfony/console" implicitly supports the current PHP version (>=7.2.5)
Package "symfony/error-handler" implicitly supports the current PHP version (>=7.2.5)
Package "symfony/finder" implicitly supports the current PHP version (>=7.2.5)
Package "symfony/http-foundation" implicitly supports the current PHP version (>=7.2.5)
Package "symfony/http-kernel" implicitly supports the current PHP version (>=7.2.5)
Package "symfony/mime" implicitly supports the current PHP version (>=7.2.5)
Package "symfony/polyfill-ctype" implicitly supports the current PHP version (>=7.1)
Package "symfony/polyfill-iconv" implicitly supports the current PHP version (>=7.1)
Package "symfony/polyfill-intl-grapheme" implicitly supports the current PHP version (>=7.1)
Package "symfony/polyfill-intl-idn" implicitly supports the current PHP version (>=7.1)
Package "symfony/polyfill-intl-normalizer" implicitly supports the current PHP version (>=7.1)
Package "symfony/polyfill-mbstring" implicitly supports the current PHP version (>=7.1)
Package "symfony/polyfill-php72" implicitly supports the current PHP version (>=7.1)
Package "symfony/polyfill-php73" implicitly supports the current PHP version (>=7.1)
Package "symfony/polyfill-php80" implicitly supports the current PHP version (>=7.1)
Package "symfony/polyfill-php81" implicitly supports the current PHP version (>=7.1)
Package "symfony/process" implicitly supports the current PHP version (>=7.2.5)
Package "symfony/routing" implicitly supports the current PHP version (>=7.2.5)
Package "symfony/service-contracts" implicitly supports the current PHP version (>=7.2.5)
Package "symfony/var-dumper" implicitly supports the current PHP version (>=7.2.5)
Package "voku/portable-ascii" implicitly supports the current PHP version (>=7.0.0)
Package "phpunit/php-code-coverage" implicitly supports the current PHP version (>=7.2)
Package "phpunit/php-file-iterator" implicitly supports the current PHP version (>=7.1)
Package "phpunit/php-text-template" implicitly supports the current PHP version (>=5.3.3)
Package "phpunit/php-timer" implicitly supports the current PHP version (>=7.1)
Package "phpunit/phpunit" implicitly supports the current PHP version (>=7.2)
Package "sebastian/code-unit-reverse-lookup" implicitly supports the current PHP version (>=5.6)
Package "sebastian/comparator" implicitly supports the current PHP version (>=7.1)
Package "sebastian/diff" implicitly supports the current PHP version (>=7.1)
Package "sebastian/environment" implicitly supports the current PHP version (>=7.1)
Package "sebastian/exporter" implicitly supports the current PHP version (>=7.0)
Package "sebastian/global-state" implicitly supports the current PHP version (>=7.2)
Package "sebastian/object-enumerator" implicitly supports the current PHP version (>=7.0)
Package "sebastian/object-reflector" implicitly supports the current PHP version (>=7.0)
Package "sebastian/recursion-context" implicitly supports the current PHP version (>=7.0)
Package "sebastian/resource-operations" implicitly supports the current PHP version (>=7.1)
Package "sebastian/type" implicitly supports the current PHP version (>=7.2)
Package "sebastian/version" implicitly supports the current PHP version (>=5.6)
87 required packages checked wih 47 warnings and 0 errors
```
