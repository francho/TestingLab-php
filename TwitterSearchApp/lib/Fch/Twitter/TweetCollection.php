<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

namespace Fch\Twitter;

class TweetCollection extends \ArrayIterator
{
    /**
     * @param \Fch\Twitter\Tweet $value
     */
    public function append($value)
    {
        if (!is_a($value, '\Fch\Twitter\Tweet')) {
            throw new \Fch\InvalidParameterException('object of type \Fch\Twitter\Tweet expected');
        }
        parent::append($value);
    }

    /**
     * @return \Fch\Twitter\Tweet
     */
    public function current()
    {
        return parent::current();
    }


}
