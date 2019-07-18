<?php

namespace Adapter;

class ThirdPartyWriter
{
    public function showParagraph(string $text)
    {
        if(preg_match("/^[a-zA-Z ]+$/", $text)){
            echo '<p>' . $text . '</p>';
        } else {
            echo 'Writer works only with Latin symbols';
        }
    }
}