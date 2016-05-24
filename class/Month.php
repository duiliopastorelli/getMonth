<?php

class Month
{
    public static function getMonth($lang = null, $tMachine=null)
    {
        //Add or remove an integer to generate future or past months
        if($tMachine!==0){
            $result = self::generateMonth()+$tMachine;
        }

        //Switch between languages to generate a proper string ready for output
        switch ($lang){
            case "zh":
                return self::generateChineseMonth($result);
            break;
        }
        return $result;
    }

    //Generate a mounth using timezone UTC and 1->12 numbers without the zero
    private function generateMonth()
    {
        date_default_timezone_set('UTC');
        
        return date("n");
    }

    //Generate The Chinese month ready to output, adding the Chinese character
    private function generateChineseMonth($generatedMonth)
    {
        switch ($generatedMonth){
            case 5:
                return $generatedMonth."月";
            break;
        }
    }
}