<?php

namespace App\Services;

use App\Repositories\Contracts\NewsRepository;
use Illuminate\View\View;

class NewsService implements Contracts\NewsService
{
    public function __construct(
        public NewsRepository $repository,
    )
    {
    }

    /** @inheritDoc */

    public function getAllNews(){
        return $this->repository->orderByDesc('created_at')->paginate(12);
    }

    public function showNews($slug): View{
        return view('news', ['news'=>$this->repository->getOneNews($slug)]);
    }


}
