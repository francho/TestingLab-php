<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

namespace Fch\Twitter;

use Fch\InvalidParameterException;

class Tweet
{
    private $_id;
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

    public function setId($id)
    {
        if (!is_numeric($id)) {
            throw new InvalidParameterException('Id must be numeric');
        }
        $this->_id = $id;
    }

    public function getId()
    {
        return $this->_id;
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