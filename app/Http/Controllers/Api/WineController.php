<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PaginationRequest;
use App\Http\Resources\WineResource;
use App\Models\Wine;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class WineController extends Controller
{
    public function index(PaginationRequest $request): AnonymousResourceCollection
    {
        return WineResource::collection(Wine::paginate($request->input('per_page')));
    }

    public function show(Wine $wine): WineResource
    {
        return new WineResource($wine);
    }
}
