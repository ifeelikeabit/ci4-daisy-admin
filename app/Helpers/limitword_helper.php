<?php
function word_limiter($str, $limit = 100, $end_char = '...') {
        if (trim($str) === '') {
            return $str;
        }

        $words = explode(' ', $str);

        if (count($words) <= $limit) {
            return $str;
        }

        return implode(' ', array_slice($words, 0, $limit)) . $end_char;
    }