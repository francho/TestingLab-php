testinglab-php
==============
Ejemplos y material para el testing hacklab de AgileAragon http://agile-aragon.org/2013/02/25/testing-hacklab-en-marzo/

Algunas herramientas que vamos a utilizar:

PHPUnit
-------
Para los test unitarios

http://www.phpunit.de/

usaremos también el generador de esqueletos de test

phpunit-skelgen

Xdebug
------
Imprescindible... olvidate de los "var_dump($var)" ;)

http://xdebug.org/

PHP Lint
--------
Comprueba la sintaxis de nuestro código

http://www.php.net/manual/es/function.runkit-lint.php

PHP_CodeSniffer
---------------
Comprueba que nuestro código se ajusta a los estándares.

http://pear.php.net/manual/en/package.php.php-codesniffer.annotated-ruleset.php

PHPMD
-----
Detector de código basura y posibles bugs

http://phpmd.org/

PHPloc
------
Para realizar métricas y analizar la estructura del proyecto

https://github.com/sebastianbergmann/phploc

Servidores de integración continua
----------------------------------
Jenkins
http://jenkins-ci.org/

Esqueleto jenkins para proyectos php
http://jenkins-php.org/

Otra opción:

Servidor de integración continua online
http://travis-ci.org

Este proyecto testeado por Travis (ver fichero .travis.yml)
https://travis-ci.org/francho/TestingLab-php

Ant
---
Para automatizar todos los tests

http://ant.apache.org/