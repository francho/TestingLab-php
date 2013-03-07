<?php
/**
 * @author   Francho <http://francho.org/about>
 * @license  http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */


/**
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
 */
namespace Fch\Twitter;

use Fch\Twitter\TweetCollection;

class TwitterParser
{
    /**
     * @param $jsonResponse
     * @return \Fch\Twitter\TweetCollection
     */
    public function parse($jsonResponse)
    {
        $collection = new \Fch\Twitter\TweetCollection();

        $json = json_decode($jsonResponse, true);

        foreach ($json['results'] as $result) {
            $tweet = new Tweet();
            $tweet->setTweetId($result['id']);
            $tweet->setText($result['text']);
            $tweet->setCreatedAtTimestamp(strtotime($result['created_at']));
            $collection->append($tweet);
        }

        return $collection;
    }
}
