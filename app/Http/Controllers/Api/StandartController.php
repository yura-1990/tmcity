<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StandartResource;
use App\Models\Standart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StandartController extends Controller
{
    public function standards(): JsonResponse
    {
        return response()->json(StandartResource::collection(Standart::query()->get()));
    }
}
