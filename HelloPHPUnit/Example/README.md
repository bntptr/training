PHPUnit
-------

source :
https://phpunit.de/getting-started.html

running : 
vendor/bin/phpunit --bootstrap src/bootstrap.php tests/Example/*

PSR 4
-----
source : http://www.php-fig.org/psr/psr-4/

Phpcs
-----
connaitre les standards de code installés : 
phpcs -i

configurer un standard :
phpcs --config-set default_standard PSR2

running :
./vendor/bin/phpcs src

aides :
* http://benjamin.leveque.me/qualite-du-code-phpcs.html
* https://pear.php.net/manual/fr/package.php.php-codesniffer.usage.php

Phpdoc
------
running :
phpdoc -d ./src -t ./docs/api --template="responsive-twig"

source :
http://www.phpdoc.org/

require :
http://php.net/manual/en/xsl.installation.php
