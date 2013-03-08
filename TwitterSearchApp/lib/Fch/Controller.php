<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

namespace Fch;


class Controller
{
    function __construct()
    {
        header('Content-type: text/html; charset=utf-8');
    }

    public function indexAction()
    {
        $query = $this->_getParam('q');

        $view = new \Fch\IndexView();

        if (!empty($query)) {
            $api = new \Fch\Twitter\TwitterApi();

            $view->setVar('tweets', $api->searchTweet($query));
        }

        $view->setVar('query', $query);


        echo $view->render();

    }

    private function _getParam($key)
    {
        if (!empty($_GET[$key])) {
            return $_GET[$key];
        } else if (!empty($_POST)) {
            return $_POST[$key];
        }

        return null;
    }

}
