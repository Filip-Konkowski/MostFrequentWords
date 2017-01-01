<?php


namespace App;


class WordFrequency
{
    /**
     * @param string $string
     * @return array
     */
    public function getWordFrequency(string $string)
    {
        $string  = strtolower($string);
        $words = str_word_count($string, 1);
        $frequency = array_count_values($words);
        arsort($frequency);
        return array_slice($frequency, 0, 100);
    }
}