<?php

namespace Adapter;

class Adapter extends WorkingSender
{
    private $adaptee;

    public function __construct(OldNotWorkingSender $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function showData()
    {
        $this->paragraphs = $this->adaptee->getParagraphs();
        parent::showData();
    }
}