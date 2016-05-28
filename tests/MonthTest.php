<?php
require_once ('class/Month.php');

class MonthTest extends PHPUnit_Framework_TestCase
{
    private function currentMonth()
    {
        return date("n");
    }

    public function testGetCurrentPhpMonth()
    {
        $this->assertEquals(self::currentMonth(), Month::getMonth());
    }

    public function testGetNextMonth()
    {
        $month = self::currentMonth();
        $month++;
        $this->assertEquals($month, Month::getMonth(null, null, 1));
    }

    public function testGetPrevtMonth()
    {
        $month = self::currentMonth();
        $month--;
        $this->assertEquals($month, Month::getMonth(null, null, -1));
    }

    public function testGetItalianMonths()
    {
        $this->assertEquals("maggio", Month::getMonth("it"));
        $this->assertEquals("gennaio", Month::getMonth("it", 1));
        $this->assertEquals("febbraio", Month::getMonth("it", 2));
        $this->assertEquals("marzo", Month::getMonth("it", 3));
        $this->assertEquals("aprile", Month::getMonth("it", 4));
        $this->assertEquals("maggio", Month::getMonth("it", 5));
        $this->assertEquals("giugno", Month::getMonth("it", 6));
        $this->assertEquals("luglio", Month::getMonth("it", 7));
        $this->assertEquals("agosto", Month::getMonth("it", 8));
        $this->assertEquals("settembre", Month::getMonth("it", 9));
        $this->assertEquals("ottobre", Month::getMonth("it", 10));
        $this->assertEquals("novembre", Month::getMonth("it", 11));
        $this->assertEquals("dicembre", Month::getMonth("it", 12));
    }
    
    public function testGetItalianPrevMonth()
    {
        $this->assertEquals("aprile", Month::getMonth("it",null, -1));
    }
    
    public function testGetItalianNextMonth()
    {
        $this->assertEquals("giugno", Month::getMonth("it",null, +1));
    }

    public function testGetChineseMonth()
    {
        $this->assertEquals("5月", Month::getMonth("zh"));
    }
    
}