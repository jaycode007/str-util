<?php
    namespace StrUtil;

    class Counter
    {
        /**
         * @param string $text The text we want to count the number of words it consist of
         * @return int The number of words in text
         */
        public static function countWords(string $text){
            /** @var int $count To store the result of counting words in text */
            $count = 0;
            //Clean up the string
            $text = trim($text);
            /** @var array $words Array containing the words */
            $words = explode(" ", $text);
            //Array size is the number of words in text
            $count = sizeof($words);
            return $count;
        }

        public static function countCharacters(string $text){
            $count = 0;
            $text = trim($text);
            $count = strlen($text);
            return $count;
        }
    }