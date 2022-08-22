<?php

namespace App\Http\Controllers\Api\Shop;

use App\Repositories\Shop\Home\HomeRepositoryInterface;
use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\JsonResponse;

class HomeController   extends BaseController
{
    private $homeRepository;
  
    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $response = $this->homeRepository->getHomData();
        return $this->successResponse($response, 'Get Product Data For Starter Page');
    }

}
