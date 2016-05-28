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
        $this->assertEquals("Maggio", Month::getMonth("it"));
        $this->assertEquals("Gennaio", Month::getMonth("it", 1));
        $this->assertEquals("Febbraio", Month::getMonth("it", 2));
        $this->assertEquals("Marzo", Month::getMonth("it", 3));
        $this->assertEquals("Aprile", Month::getMonth("it", 4));
        $this->assertEquals("Maggio", Month::getMonth("it", 5));
        $this->assertEquals("Giugno", Month::getMonth("it", 6));
        $this->assertEquals("Luglio", Month::getMonth("it", 7));
        $this->assertEquals("Agosto", Month::getMonth("it", 8));
        $this->assertEquals("Settembre", Month::getMonth("it", 9));
        $this->assertEquals("Ottobre", Month::getMonth("it", 10));
        $this->assertEquals("Novembre", Month::getMonth("it", 11));
        $this->assertEquals("Dicembre", Month::getMonth("it", 12));
    }
    
    public function testGetItalianPrevMonth()
    {
        $this->assertEquals("Aprile", Month::getMonth("it",null, -1));
    }
    
    public function testGetItalianNextMonth()
    {
        $this->assertEquals("Giugno", Month::getMonth("it",null, +1));
    }

    public function testGetGermanMonths()
    {
        $this->assertEquals("Mai", Month::getMonth("de"));
        $this->assertEquals("Januar", Month::getMonth("de", 1));
        $this->assertEquals("Februar", Month::getMonth("de", 2));
        $this->assertEquals("März", Month::getMonth("de", 3));
        $this->assertEquals("April", Month::getMonth("de", 4));
        $this->assertEquals("Mai", Month::getMonth("de", 5));
        $this->assertEquals("Juni", Month::getMonth("de", 6));
        $this->assertEquals("Juli", Month::getMonth("de", 7));
        $this->assertEquals("August", Month::getMonth("de", 8));
        $this->assertEquals("September", Month::getMonth("de", 9));
        $this->assertEquals("Oktober", Month::getMonth("de", 10));
        $this->assertEquals("November", Month::getMonth("de", 11));
        $this->assertEquals("Dezember", Month::getMonth("de", 12));
    }

    public function testGetGermanPrevMonth()
    {
        $this->assertEquals("April", Month::getMonth("de",null, -1));
    }

    public function testGetGermanNextMonth()
    {
        $this->assertEquals("Juni", Month::getMonth("de",null, +1));
    }

    public function testGetChineseMonth()
    {
        $this->assertEquals("5月", Month::getMonth("zh"));
    }
    
}