<?php

class ParenthesisChallenge
{

    public static function validParenthesis($str)
    {
        if (!$str) {
            return true;
        }

        if (
            $str[0] === ")" ||
            $str[strlen($str) - 1] === "(" ||
            strlen($str) % 2 != 0
        ) {
            return false;
        }

        return true;
    } // validParenthesis

}// ParenthesisChallenge
