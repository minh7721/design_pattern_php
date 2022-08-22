<?php

namespace App\FactoryMethod;

class Executive implements Interviewer
{
    public function askQuestions()
    {
        echo "Ban biet gi ve doanh nghiep chung toi\n";
    }
}