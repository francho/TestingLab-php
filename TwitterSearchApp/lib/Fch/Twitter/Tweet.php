<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

namespace Fch\Twitter;

class Tweet
{
    private $data;

    /**
     * Constructor
     *
     * recibe un tweet en formato array asociativo generado a partir de un json similar a este:
     *
     * {
     *   "created_at": "Sat, 22 Oct 2011 19:26:15 +0000",
     *   "from_user": "ThaRealist2DoIt",
     *   "from_user_id": 418670122,
     *   "from_user_id_str": "418670122",
     *   "geo": null,
     *   "id": 127828128054779904,
     *   "id_str": "127828128054779904",
     *   "iso_language_code": "it",
     *   "metadata": {
     *      "result_type": "recent"
     *   },
     *   "profile_image_url": "http://a2.twimg.com/profile_images/1536604644/IMAG0623-1_normal.jpg",
     *   "source": "&lt;a href=&quot;http://twitter.com/download/android&quot; rel=&quot;nofollow&quot;&gt;Twitter for Android&lt;/a&gt;",
     *   "text": "@ChevyBoyPee francho",
     *   "to_user": "ChevyBoyPee",
     *   "to_user_id": 287406293,
     *   "to_user_id_str": "287406293"
     *   },
     *
     * @param String $tweetJson
     */
    public function __construct(Array $tweetJson)
    {
        $this->data = $tweetJson;
    }


    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
                ' in ' . $trace[0]['file'] .
                ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function getFormattedDate()
    {
        $timestamp = strtotime($this->__get('created_at'));

        $date1 = new DateTime("now");
        $date2 = new DateTime(date("c", $timestamp));

        $interval = $date1->diff($date2);

        $days = $interval->d;
        $hours = $interval->h;
        $mins = $interval->i;
        $secs = $interval->s;

        if ($days != 0) {
            $ago = 'hace ' . $days . ' dia(s)';
        } else if ($hours != 0) {
            $ago = 'hace ' . $hours . ' hora(s)';
        } else {
            $ago = 'hace ' . ($mins != 0 ? $mins . ' min(s) ' : $secs . ' seg(s)');
        }
        return $ago;
    }
}