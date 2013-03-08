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
        $now = new \DateTime("now");

        $interval = $now->diff(new \DateTime(date("c", $timestamp)));

        $days = $interval->d;
        $hours = $interval->h;
        $minutes = $interval->i;
        $secs = $interval->s;

        if ($days != 0) {
            $ago = 'hace ' . $days . ' día(s)';
        } else if ($hours != 0) {
            $ago = 'hace ' . $hours . ' hora(s)';
        } else {
            $ago = 'hace ';
            $ago .= ($minutes != 0 ? $minutes . ' min(s) ' : $secs . ' seg(s)');
        }
        return $ago;
    }

}
