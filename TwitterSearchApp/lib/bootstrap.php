<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__));

function myAutoLoad($theClassName)
{
    $fileName = preg_replace('/[_\\\\]/', DIRECTORY_SEPARATOR, $theClassName) . '.php';
    @include_once($fileName);
}

spl_autoload_register("myAutoLoad");