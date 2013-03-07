<?php
namespace Fch\Twitter;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-07 at 01:04:22.
 */
class TwitterParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TwitterParser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new TwitterParser;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Por cada elemento del array devuelto se llamará una vez al test que lo ha invocado pasándoselo como argumento
     *
     * @return array[array] con la colección de datos a probar (en este caso solo uno).
     *
     */
    public function mockTwitterJson()
    {
        return array(array(file_get_contents(dirname(__FILE__) . '/mock_twitter.json')));
    }

    /**
     * @dataProvider mockTwitterJson
     * @covers Fch\Twitter\TwitterParser::parse
     */
    public function testParse($json)
    {
        $actual = $this->object->parse($json);
        $this->assertEquals(15, $actual->count());

        $actual->rewind();
        $fistTweet = $actual->current();

        $this->assertEquals(309383183588278272, $fistTweet->getTweetId());
        $this->assertEquals(
            'RT @milladigital: Este sábado en @CIEMZaragoza, Testing Hacklab de @AgileAragon: Java,.Net,Python, Android,C++, Grails, PHP, RubyRor... http://t.co/bdkhWL8WsY',
            $fistTweet->getText()
        );
        $this->assertEquals(1362597673, $fistTweet->getCreatedAtTimestamp());


    }
}
