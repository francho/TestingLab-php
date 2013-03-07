<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__));

function myAutoload ($theClassName) {
    include($theClassName . ".php");
}

spl_autoload_register("myAutoload");