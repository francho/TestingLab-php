<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

namespace Fch\Twitter;

use Fch\InvalidParameterException;

class Tweet
{
    private $_tweetId;
    private $_createdAtTimestamp;
    private $_text;


    public function setCreatedAtTimestamp($createdAtTimestamp)
    {
        if (!is_numeric($createdAtTimestamp)) {
            throw new InvalidParameterException('timestamp expected');
        }
        $this->_createdAtTimestamp = $createdAtTimestamp;
    }

    public function getCreatedAtTimestamp()
    {
        return $this->_createdAtTimestamp;
    }

    public function setTweetId($tweetId)
    {
        if (!is_numeric($tweetId)) {
            throw new InvalidParameterException('tweetId must be numeric');
        }
        $this->_tweetId = $tweetId;
    }

    public function getTweetId()
    {
        return $this->_tweetId;
    }

    public function setText($text)
    {
        $this->_text = $text;
    }

    public function getText()
    {
        return $this->_text;
    }


    public function getElapsedTime()
    {
        return \Fch\DateUtils::elapsedTime($this->_createdAtTimestamp);
    }
}