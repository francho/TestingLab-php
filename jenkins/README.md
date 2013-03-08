Jenkins
=======

En esta carpeta está una configuración necesaria para que Jenkins (http://jenkins-ci.org) testee el proyecto automáticamente.

Los plungins instalados en el Jenkins son:

- Checkstyle (para procesar los logs de PHP_CodeSniffer)
- Clover PHP (para mostrar la covertura de código PHPUnit)
- DRY (para procesar los logs de phpcpd)
- HTML Publisher (para publicar resultados en web)
- JDepend (para procesar logs de PHP_Depend)
- Plot (para procesar los logs de phploc)
- PMD (para procesar los logs de PHPMD)
- Violations (para procesar los otros logs)
- xUnit (para procesar los logs de PHPUnit)

La automatización se realiza mediante un proceso ANT, por lo que es necesario crear un fichero build.xml que realice los pasos correspondientes y genere los logs.

Más información en http://jenkins-php.org/