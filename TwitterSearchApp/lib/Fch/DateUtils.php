<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

namespace Fch;


class DateUtils
{

    /**
     * @param $timestamp
     * @return string
     */
    static function elapsedTime($timestamp)
    {
        $date1 = new \DateTime("now");
        $date2 = new \DateTime(date("c", $timestamp));

        $interval = $date1->diff($date2);

        $days = $interval->d;
        $hours = $interval->h;
        $mins = $interval->i;
        $secs = $interval->s;

        if ($days != 0) {
            $ago = 'hace ' . $days . ' día(s)';
        } else if ($hours != 0) {
            $ago = 'hace ' . $hours . ' hora(s)';
        } else {
            $ago = 'hace ' . ($mins != 0 ? $mins . ' min(s) ' : $secs . ' seg(s)');
        }
        return $ago;
    }

}
