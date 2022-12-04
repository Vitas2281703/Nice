<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRequest;
use App\Services\Contracts\RequestService;

class RequestController extends Controller
{
    public function __construct(
        public RequestService $requestService,
    )
    {
    }

    public function index(RequestRequest $request){
        $data = $request->validated();
        return $this->requestService->createRequest($data);
    }
}
