<?php
namespace GetMonth;

class Month
{
    /*
     * get the month.
     * 1st parameter is the language (it, de, es, ...)
     * 2nd parameter is the month (3->March, 4->April, ...)
     * 3rd parameter is the timeMachine (-1->previous month, 1->next month, ...)
     */
    public static function getMonth($lang=null, $tMachine=null, $month=null)
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

            case "de":
                $result = self::generateGermanMonth($requestedMonth);
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
    private function timeMachine($monthsDiff)
    {
        if (!isset($monthsDiff)){
            return self::generateCurrentMonth();
        } else {
            $currentMonth = self::generateCurrentMonth();
            if (($currentMonth+$monthsDiff)>12){
                return ($currentMonth+$monthsDiff)-12;
            } else {
                return $currentMonth+$monthsDiff;
            }
        }
    }
    
    private function generateItalianMonth($generatedMonth)
    {
        switch ($generatedMonth){
            case 1:
                return "Gennaio";
            break;
            
            case 2:
                return "Febbraio";
            break;

            case 3:
                return "Marzo";
                break;

            case 4:
                return "Aprile";
                break;

            case 5:
                return "Maggio";
                break;

            case 6:
                return "Giugno";
                break;

            case 7:
                return "Luglio";
                break;

            case 8:
                return "Agosto";
                break;

            case 9:
                return "Settembre";
                break;

            case 10:
                return "Ottobre";
                break;

            case 11:
                return "Novembre";
                break;

            case 12:
                return "Dicembre";
                break;
        }
    }

    private function generateGermanMonth($generatedMonth)
    {
        switch ($generatedMonth) {
            case 1:
                return "Januar";
                break;

            case 2:
                return "Februar";
                break;

            case 3:
                return "März";
                break;

            case 4:
                return "April";
                break;

            case 5:
                return "Mai";
                break;

            case 6:
                return "Juni";
                break;

            case 7:
                return "Juli";
                break;

            case 8:
                return "August";
                break;

            case 9:
                return "September";
                break;

            case 10:
                return "Oktober";
                break;

            case 11:
                return "November";
                break;

            case 12:
                return "Dezember";
                break;
        }
    }
    
}