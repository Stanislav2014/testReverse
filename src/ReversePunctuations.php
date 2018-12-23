<?php
/**
 * Created by PhpStorm.
 * User: stanislav
 * Date: 22.12.18
 * Time: 17:09
 */

namespace App\Src;


class ReversePunctuations
{
    /**
     * @param $message
     * @return string
     */
    public static function reverse ($message)
    {
        $regExpPattern1 = '/[[:punct:]]/';


        $result = preg_split('//u', $message, null, PREG_SPLIT_NO_EMPTY);
        $punct = [];
        foreach ($result as $char) {
            if (preg_match($regExpPattern1, $char)) {
                array_push($punct, $char);
            }
        }
        foreach ($result as $key => $char) {
            if (preg_match($regExpPattern1, $char)) {
                $result[$key] = array_pop($punct);
            }

        }
        return implode($result);
    }



}