<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

namespace Fch\Twitter;

class TweetCollection extends \ArrayIterator
{
    public function append($value)
    {
        parent::append($value);
    }

}
