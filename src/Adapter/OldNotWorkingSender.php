<?php

namespace Adapter;

class OldNotWorkingSender
{
    protected $paragraphs = [
        'Этот класс несовместим со сторонним сервисом ThirdPartyWriter',
        'И если вы видите это сообщение',
        'Значит был использован Адаптер',
    ];

    public function showParagraphs()
    {
        $writer = new ThirdPartyWriter();

        foreach ($this->paragraphs as $paragraph){
            $writer->showParagraph($paragraph);
        }
    }

    public function getParagraphs()
    {
        return $this->paragraphs;
    }
}