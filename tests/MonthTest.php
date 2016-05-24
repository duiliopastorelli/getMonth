<?php
require_once ('class/Month.php');

class MonthTest extends PHPUnit_Framework_TestCase
{
    private function currentMonth()
    {
        return date("n");
    }

    public function testGetDefaultPhpMonth()
    {
        $this->assertEquals(self::currentMonth(), Month::getMonth());
    }

    public function testGetChineseMonth()
    {
        $this->assertEquals("5月", Month::getMonth("zh"));
    }

    public function testGetNextMonth()
    {
        $month = self::currentMonth();
        $month++;
        $this->assertEquals($month, Month::getMonth(null,1));
    }

}