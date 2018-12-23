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
        $regExpPattern1 = '/[^[:punct:]]/';

        $result = array_reverse(preg_split($regExpPattern1, $message, -1, PREG_SPLIT_NO_EMPTY));

        $nresult = '';
        $words = preg_split('/[[:punct:]]/', $message, -1, PREG_SPLIT_NO_EMPTY);

        foreach ( $words as $key => $word) {

            $nresult .= $word . $result[$key];
        }
        return $nresult;
    }



}