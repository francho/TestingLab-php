<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */
namespace Fch;

class View
{
    private $vars = array();
    private $templateFile;

    function __construct($templateFile)
    {
        $this->templateFile = $templateFile;
    }

    public function getVar($name)
    {
        return $this->vars[$name];
    }

    public function setVar($name, $value)
    {
        $this->vars[$name] = $value;
    }

    public function render()
    {
        extract($this->vars);
        ob_start();
        include($this->templateFile);
        return ob_get_clean();
    }
}
