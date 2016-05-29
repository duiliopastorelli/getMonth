<?php
namespace DuilioPastorelli;

require_once ('src/GetMonth/Month.php');

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
        $this->assertEquals($month, Month::getMonth(null, 1));
    }

    public function testGetPrevtMonth()
    {
        $month = self::currentMonth();
        $month--;
        $this->assertEquals($month, Month::getMonth(null, -1));
    }

    public function testGetItalianMonths()
    {
        $this->assertEquals("Maggio", Month::getMonth("it"));
        $this->assertEquals("Gennaio", Month::getMonth("it", null, 1));
        $this->assertEquals("Febbraio", Month::getMonth("it", null, 2));
        $this->assertEquals("Marzo", Month::getMonth("it", null, 3));
        $this->assertEquals("Aprile", Month::getMonth("it", null, 4));
        $this->assertEquals("Maggio", Month::getMonth("it", null, 5));
        $this->assertEquals("Giugno", Month::getMonth("it", null, 6));
        $this->assertEquals("Luglio", Month::getMonth("it", null, 7));
        $this->assertEquals("Agosto", Month::getMonth("it", null, 8));
        $this->assertEquals("Settembre", Month::getMonth("it", null, 9));
        $this->assertEquals("Ottobre", Month::getMonth("it", null, 10));
        $this->assertEquals("Novembre", Month::getMonth("it", null, 11));
        $this->assertEquals("Dicembre", Month::getMonth("it", null, 12));
    }
    
    public function testGetItalianPrevMonth()
    {
        $this->assertEquals("Aprile", Month::getMonth("it",-1));
    }
    
    public function testGetItalianNextMonth()
    {
        $this->assertEquals("Giugno", Month::getMonth("it", 1));
    }

    public function testGetGermanMonths()
    {
        $this->assertEquals("Mai", Month::getMonth("de"));
        $this->assertEquals("Januar", Month::getMonth("de", null, 1));
        $this->assertEquals("Februar", Month::getMonth("de", null, 2));
        $this->assertEquals("März", Month::getMonth("de", null, 3));
        $this->assertEquals("April", Month::getMonth("de", null, 4));
        $this->assertEquals("Mai", Month::getMonth("de", null, 5));
        $this->assertEquals("Juni", Month::getMonth("de", null, 6));
        $this->assertEquals("Juli", Month::getMonth("de", null, 7));
        $this->assertEquals("August", Month::getMonth("de", null, 8));
        $this->assertEquals("September", Month::getMonth("de", null, 9));
        $this->assertEquals("Oktober", Month::getMonth("de",null, 10));
        $this->assertEquals("November", Month::getMonth("de", null, 11));
        $this->assertEquals("Dezember", Month::getMonth("de", null, 12));
    }

    public function testGetGermanPrevMonth()
    {
        $this->assertEquals("April", Month::getMonth("de",-1));
    }

    public function testGetGermanNextMonth()
    {
        $this->assertEquals("Juni", Month::getMonth("de", 1));
    }
    
}