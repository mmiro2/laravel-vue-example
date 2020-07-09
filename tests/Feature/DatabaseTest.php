<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_saveform()
    {


	    $response = $this->json('POST', 'http://127.0.0.1:8000/api/savecontact', [
		    	'name' => 'test4',
			'email' => 'test@test.com',
			'phone' => '1234567',
			'message' => 'aabbcc'
		]);

	    $this->assertDatabaseHas('inquiries', [
		    	'name' => 'test4',
			'email' => 'test@test.com',
			'phone' => '1234567',
			'message' => 'aabbcc'
			        ]);


    }
}
