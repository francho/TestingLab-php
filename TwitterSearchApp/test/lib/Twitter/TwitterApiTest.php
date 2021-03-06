<?php
namespace Fch\Twitter;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-07 at 21:06:45.
 */
class TwitterApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TwitterApi
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new TwitterApi;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Fch\Twitter\TwitterApi::searchTweet
     */
    public function testSearchTweet()
    {
        $actual = $this->object->searchTweet('twitter');

        $this->assertTrue(is_a($actual, '\Fch\Twitter\TweetCollection'));
        $this->assertGreaterThan(0, $actual->count());
    }

}
