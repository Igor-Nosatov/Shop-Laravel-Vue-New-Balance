<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected function createResponse(array $data, string $message, int $status = JsonResponse::HTTP_CREATED): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'status' => $status, 'data' => $data, ]);
    }

    protected function successPaginationResponse( array $meta, array $data, string $message, int $status = JsonResponse::HTTP_OK, array $map_bounds = null, array $mapClasterization = null): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'status' => $status,'meta'=> $meta, 'data' => $data, 'map_bounds' => $map_bounds, 'map_clasterization' => $mapClasterization]);
    }

    protected function successResponse(  array $data,string $message, int $status = JsonResponse::HTTP_OK): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'status' => $status, 'data' => $data, ]);
    }

    protected function emptyResponse(string $message, int $status = JsonResponse::HTTP_NO_CONTENT): JsonResponse
    {
        return new JsonResponse($message, $status);
    }
}
