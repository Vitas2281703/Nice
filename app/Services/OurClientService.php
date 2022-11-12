<?php

namespace App\Services;



use App\Repositories\OurClientRepository;

class OurClientService implements Contracts\OurClientService
{
    public function __construct(
        public OurClientRepository $repository
    ) {
    }

    /** @inheritDoc */
    public function getOurClients(){
        return $this->repository->get();
    }
}
