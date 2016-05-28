<?php

class Month
{
    /*
     * get the month.
     * 1st parameter is the language (it, de, es, ...)
     * 2nd parameter is the month (3->March, 4->April, ...)
     * 3rd parameter is the timeMachine (-1->previous month, 1->next month, ...)
     */
    public static function getMonth($lang=null, $month=null, $tMachine=null)
    {
        if (isset($month)){
            $requestedMonth = $month;
        } else {
            $requestedMonth = self::timeMachine($tMachine);
        }

        //Switch between languages to generate a proper string ready for output
        switch ($lang){
            case "it":
                $result = self::generateItalianMonth($requestedMonth);
            break;
                
            case "zh":
                $result = self::generateChineseMonth($requestedMonth);
            break;
            
            default:
                $result = $requestedMonth;
        }
        return $result;
    }

    //Generate a mounth using timezone UTC and 1->12 numbers without the zero
    private function generateCurrentMonth()
    {
        date_default_timezone_set('UTC');
        
        return date("n");
    }
    
    //Generate a mounth number adding o removing a vertain number of months
    private function timeMachine($montsDiff)
    {
        if (!isset($montsDiff)){
            return self::generateCurrentMonth();
        } else {
            $currentMonth = self::generateCurrentMonth();
            if (($currentMonth+$montsDiff)>12){
                return ($currentMonth+$montsDiff)-12;
            } else {
                return $currentMonth+$montsDiff;
            }
        }
    }
    
    private function generateItalianMonth($generatedMonth)
    {
        switch ($generatedMonth){
            case 1:
                return "gennaio";
            break;
            
            case 2:
                return "febbraio";
            break;

            case 3:
                return "marzo";
                break;

            case 4:
                return "aprile";
                break;

            case 5:
                return "maggio";
                break;

            case 6:
                return "giugno";
                break;

            case 7:
                return "luglio";
                break;

            case 8:
                return "agosto";
                break;

            case 9:
                return "settembre";
                break;

            case 10:
                return "ottobre";
                break;

            case 11:
                return "novembre";
                break;

            case 12:
                return "dicembre";
                break;

            case 1:
                return "gennaio";
                break;
        }
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