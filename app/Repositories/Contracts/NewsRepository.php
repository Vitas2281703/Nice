<?php

namespace App\Repositories\Contracts;


interface NewsRepository
{
    public function getOneNews($slug);
}
