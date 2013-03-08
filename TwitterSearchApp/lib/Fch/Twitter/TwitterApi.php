<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

namespace Fch\Twitter;

class TwitterApi
{
    const API_URL_BASE = "http://search.twitter.com/search.json?q=";

    /**
     * @param $query
     * @return TweetCollection
     */
    public function searchTweet($query)
    {
        $json = $this->_getJson(self::API_URL_BASE . $query);

        $parser = new TwitterParser();
        return $parser->parse($json);
    }

    /**
     * Llamada al api de Twitter
     * @param string $url
     */
    private static function _getJson($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }
}
