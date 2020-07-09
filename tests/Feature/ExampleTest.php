<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //$response = $this->get('http://127.0.0.1:8000');

	    //$response->assertStatus(200);
	    //

	    $response = $this->json('POST', 'http://127.0.0.1:8000/api/savecontact', [
		            'name' => 'test4',
			            'email' => 'thi@tesssssst.com'
				        ]);
	        // or $this->postJson in Laravel 6.x
	    //
	    $response->assertStatus(422);
    }
}
