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
library "egulias/email-validator" implicitly supports the current PHP version (>=5.5)
library "monolog/monolog" implicitly supports the current PHP version (>=7.2)
library "nette/schema" implicitly supports the current PHP version (>=7.1 <8.2)
library "nette/utils" implicitly supports the current PHP version (>=7.2 <8.2)
library "psr/container" implicitly supports the current PHP version (>=7.4.0)
library "psr/event-dispatcher" implicitly supports the current PHP version (>=7.2.0)
library "psr/simple-cache" implicitly supports the current PHP version (>=5.3.0)
library "ramsey/collection" implicitly supports the current PHP version (^7.3 || ^8)
library "swiftmailer/swiftmailer" implicitly supports the current PHP version (>=7.0.0)
library "symfony/console" implicitly supports the current PHP version (>=7.2.5)
library "symfony/error-handler" implicitly supports the current PHP version (>=7.2.5)
library "symfony/finder" implicitly supports the current PHP version (>=7.2.5)
library "symfony/http-foundation" implicitly supports the current PHP version (>=7.2.5)
library "symfony/http-kernel" implicitly supports the current PHP version (>=7.2.5)
library "symfony/mime" implicitly supports the current PHP version (>=7.2.5)
library "symfony/polyfill-ctype" implicitly supports the current PHP version (>=7.1)
library "symfony/polyfill-iconv" implicitly supports the current PHP version (>=7.1)
library "symfony/polyfill-intl-grapheme" implicitly supports the current PHP version (>=7.1)
library "symfony/polyfill-intl-idn" implicitly supports the current PHP version (>=7.1)
library "symfony/polyfill-intl-normalizer" implicitly supports the current PHP version (>=7.1)
library "symfony/polyfill-mbstring" implicitly supports the current PHP version (>=7.1)
library "symfony/polyfill-php72" implicitly supports the current PHP version (>=7.1)
library "symfony/polyfill-php73" implicitly supports the current PHP version (>=7.1)
library "symfony/polyfill-php80" implicitly supports the current PHP version (>=7.1)
library "symfony/polyfill-php81" implicitly supports the current PHP version (>=7.1)
library "symfony/process" implicitly supports the current PHP version (>=7.2.5)
library "symfony/routing" implicitly supports the current PHP version (>=7.2.5)
library "symfony/service-contracts" implicitly supports the current PHP version (>=7.2.5)
library "symfony/var-dumper" implicitly supports the current PHP version (>=7.2.5)
library "voku/portable-ascii" implicitly supports the current PHP version (>=7.0.0)
library "phpunit/php-code-coverage" implicitly supports the current PHP version (>=7.2)
library "phpunit/php-file-iterator" implicitly supports the current PHP version (>=7.1)
library "phpunit/php-text-template" implicitly supports the current PHP version (>=5.3.3)
library "phpunit/php-timer" implicitly supports the current PHP version (>=7.1)
library "phpunit/phpunit" implicitly supports the current PHP version (>=7.2)
library "sebastian/code-unit-reverse-lookup" implicitly supports the current PHP version (>=5.6)
library "sebastian/comparator" implicitly supports the current PHP version (>=7.1)
library "sebastian/diff" implicitly supports the current PHP version (>=7.1)
library "sebastian/environment" implicitly supports the current PHP version (>=7.1)
library "sebastian/exporter" implicitly supports the current PHP version (>=7.0)
library "sebastian/global-state" implicitly supports the current PHP version (>=7.2)
library "sebastian/object-enumerator" implicitly supports the current PHP version (>=7.0)
library "sebastian/object-reflector" implicitly supports the current PHP version (>=7.0)
library "sebastian/recursion-context" implicitly supports the current PHP version (>=7.0)
library "sebastian/resource-operations" implicitly supports the current PHP version (>=7.1)
library "sebastian/type" implicitly supports the current PHP version (>=7.2)
library "sebastian/version" implicitly supports the current PHP version (>=5.6)
87 required packages checked wih 47 warnings and 0 errors
```
