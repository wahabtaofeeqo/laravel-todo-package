<?php

namespace Wahabtaofeeqo\TodoApi\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class TodoController {

    public function index(Request $request)
    {
        $response = Http::get('https://crudcrud.com/api/ffe3bb5eb6054521b261efb70d3dc514/tasks');
        return response([
            'status' => true,
            'message' => 'Tasks',
            'data' => $response->object()
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'task' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response([
                'status' => false,
                'message' => 'Validation error',
                'error' => $validator->errors()
            ], 400);
        }

        $response = Http::post('https://crudcrud.com/api/ffe3bb5eb6054521b261efb70d3dc514/tasks', $request->all());
        return response([
            'status' => true,
            'message' => 'Task added successfully',
            'data' => $response->object()
        ]);
    }
}
