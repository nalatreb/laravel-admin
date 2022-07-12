<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WineResource;
use App\Models\Wine;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class WineController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return WineResource::collection(Wine::paginate(request('per_page')));
    }

    public function show($id): WineResource
    {
        return new WineResource(Wine::findOrFail($id));
    }
}
