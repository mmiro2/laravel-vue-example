<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_validation()
    {
    
	    $response = $this->json('POST', 'http://127.0.0.1:8000/api/savecontact', [
		    		            'name' => 'test4',
				            'email' => 'thi@tesssssst.com'
					    				        ]);
	    $response->assertStatus(422);
	    
    
    }
}
