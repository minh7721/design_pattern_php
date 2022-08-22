<?php

namespace App\FactoryMethod;

class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}