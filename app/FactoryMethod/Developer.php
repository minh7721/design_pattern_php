<?php

namespace App\FactoryMethod;

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo "Ban biet gi ve nghe Developer\n";
    }
}