<?php
class String {
    
    function shorten($line, $length, $attach = '...')
    {
        if (strlen($line) > $length)
            return (string) $afgekort = substr($line, 0, $length).$attach;
        else
            return (string) $line;
    }

}
