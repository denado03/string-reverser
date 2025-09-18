<?php declare(strict_types=1);
namespace App;

final class StringReverser
{
    public function __construct(
        private readonly string $wordPattern = "/[\p{L}]/u"
    ) {}

    public function reverseString(string $text): string
    {
        $result = '';
        $word = '';

        $chars = mb_str_split($text);

        foreach($chars as $i => $char){
            if (preg_match($this->wordPattern, $char)){
                $word .= $char;
            } else {
                if (!(empty($word))){
                    $result .= $this->reverseWithCase($word);
                    $word = '';
                }
            $result .= $char;
            }
        }

        if ($word !== ''){
            $result .= $this->reverseWithCase($word);
        }

        return $result;
    }

    public function reverseWithCase(string $str): string
    {
        $chars = mb_str_split($str);
        $reversedChars = array_reverse($chars);

        foreach ($reversedChars as $i => $char) {
            $reversedChars[$i] = match(true) {
                $chars[$i] === mb_strtoupper($chars[$i]) => mb_strtoupper($char),
                default => mb_strtolower($char),
            };
        }

        return implode('', $reversedChars);
    }
}