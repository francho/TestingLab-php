<?php
namespace Fch\Twitter;

use Fch\Twitter\Tweet;
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-06 at 22:40:16.
 */
class TweetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Tweet
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Tweet;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Fch\Twitter\Tweet::setCreatedAtTimestamp
     * @covers Fch\Twitter\Tweet::getCreatedAtTimestamp
     *
     */
    public function testSetGetCreatedAtTimestamp()
    {
        $expected = time();
        $this->object->setCreatedAtTimestamp($expected);
        $actual = $this->object->getCreatedAtTimestamp();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @expectedException \Fch\InvalidParameterException
     */
    public function testSetInvalidCreatedAtTimestampThrowsAnException() {
        $this->object->setCreatedAtTimestamp('30/12/2012');
    }

    /**
     * @covers Fch\Twitter\Tweet::setId
     * @covers Fch\Twitter\Tweet::getId
     */
    public function testSetGetId()
    {
        $expected = 127828128054779904;
        $this->object->setId($expected);
        $actual = $this->object->getId();
        $this->assertEquals($expected,$actual);
    }


    public function testSetInvalidIdThrowsAnException()
    {
        $this->setExpectedException('Fch\InvalidParameterException', 'Id must be numeric');
        $this->object->setId('lorem ipsum');
    }

    /**
     * @covers Fch\Twitter\Tweet::setText
     * @covers Fch\Twitter\Tweet::getText
     */
    public function testSetGetText()
    {
        $expected = "@ChevyBoyPee francho";
        $this->object->setText($expected);
        $actual = $this->object->getText();

        $this->assertEquals($expected, $actual);
    }



    /**
     * @covers Fch\Twitter\Tweet::getElapsedTime
     */
    public function testGetElapsedTime()
    {
        $twoDaysAgo = mktime(0, 0, 0, date("m")  , date("d")-2, date("Y"));
        $this->object->setCreatedAtTimestamp($twoDaysAgo);

        $actual = $this->object->getElapsedTime();

        $this->assertEquals("hace 2 día(s)", $actual);
    }
}
