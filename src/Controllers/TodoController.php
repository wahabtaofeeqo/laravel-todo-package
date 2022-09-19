<?php

namespace WahabTaofeeqo\TodoApi\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TodoController {

    public function index(Request $request)
    {
        return json_encode([
            'status' => true,
            'data' => []
        ]);
    }

    public function store(Request $request)
    {
        # code...
    }

    public function show(Request $request, $id)
    {
        # code...
    }

    public function destroy(Request $request)
    {
        # code...
    }
}
