<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{

    use WithFaker;


    /**
     * @test
     * When the correct credentials are supplied, a token is returned
     */
    public function it_returns_a_user_token(): void
    {
        // Given I have a user
        $credentials = [
            'email' => $this->faker->email,
            'password' => $this->faker->password,
        ];

        User::factory()
            ->withCredentials($credentials['email'], $credentials['password'])
            ->create();

        // When I post to the api endpoint
        $response = $this->post('api/login', $credentials);

        // Then a token is returned in the response
        $response->assertStatus(200);
        $response->assertJson(fn (AssertableJson $json) =>
                $json->has('access_token')
        );

    }


    /**
     * @test
     * When the correct credentials are supplied, a token is returned
     */
    public function it_returns_a_user_validation_error_when_credentials_are_incorrect(): void
    {
        // Given I have a user
        $credentials = [
            'email' => $this->faker->email,
            'password' => $this->faker->password,
        ];

        User::factory()
            ->withCredentials($credentials['email'], $credentials['password'])
            ->create();

        // When I post to the api endpoint with an incorrect password
        $response = $this->post('api/login', [
            'email' => $credentials['email'],
            'password' => $credentials['email'] . '__wrong']);

        // The response is 422
        $response->assertStatus(422);
        $response->assertJson(['message' => 'The credentials provided are incorrect']);

    }
}
