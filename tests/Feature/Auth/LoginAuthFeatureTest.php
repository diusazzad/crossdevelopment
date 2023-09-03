<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginAuthFeatureTest extends TestCase
{

    use RefreshDatabase;

    public function testShowLogin()
    {
        // Make a GET request to the '/login' route
        $response = $this->get('/login');

        // Assert that the response has a status code of 200 (OK)
        $response->assertStatus(200);

        // Assert that the 'login' view is returned
        $response->assertViewIs('login');
    }

    // public function test_login_with_valid_credentials()
    // {
    //     // Create a test user
    //     $user = factory(\App\User::class)->create([
    //         'email' => 'test@example.com',
    //         'password' => bcrypt('password123'),
    //     ]);

    //     // Simulate a POST request to the login endpoint
    //     $response = $this->post('/login', [
    //         'email' => 'admin@example.com',
    //         'password' => 'password',
    //         'remember' => false, // You can adjust this as needed
    //     ]);

    //     // Assert that the user is redirected to the intended page after successful login
    //     $response->assertRedirect('/'); // Adjust the redirection URL as needed

    //     // Assert that the user is authenticated
    //     $this->assertTrue(Auth::check());

    //     // You can also assert any additional behavior you expect after successful login
    // }

    // public function test_can_not_login_with_invalid_credentials()
    // {
    //     $response = $this->post('/login', [
    //         'email' => 'johndoe@example.com',
    //         'password' => 'invalid',
    //     ]);

    //     $response->assertRedirect('/login');
    //     $this->assertFalse(auth()->user()->isLoggedIn());
    //     $response->assertSessionHasErrors('email');
    // }
}
