<?php

namespace Wahabtaofeeqo\TodoApi\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoTest extends TestCase
{
    /**
     * Get all todos
     * 
     */
    public function test_get_todos_ok()
    {
        $response = $this->get('/todos');
        $response->assertStatus(200);
    }

    /**
     * Test Add Todo with 200
     * 
     */
    public function test_add_todo_ok()
    {
        $response = $this->post('/todos', [
            'task' => 'code',
            'description' => 'grace'
        ]);
        $response->assertStatus(200);
    }

    /**
     * Validation Error
     */
    public function test_add_todo_failed()
    {
        $response = $this->post('/todos', []);
        $response->assertStatus(400);
    }
}
