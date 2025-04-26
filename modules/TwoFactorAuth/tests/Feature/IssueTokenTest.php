<?php

namespace Modules\TwoFactorAuth\Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Modules\TwoFactorAuth\Facades\UserProviderFacade;
use Modules\TwoFactorAuth\UserProvider;
use Tests\TestCase;

class IssueTokenTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        // Run migrations for the test database
        $this->artisan('migrate');
        User::unguard();
        // Seed the users table
        User::query()->create([
            'id' => 1,
            'email' => 'user@example.com',
            'name' => 'John Doe',
            'password' => Hash::make('password'),
        ]);
    }

    public function test_issue_token_without_hitting_database()
    {
//        $this->withoutExceptionHandling();
//        $mockUser = new User();
//        $mockUser->id = 1;
//        $mockUser->email = 'user@example.com';
//        $mockUser->name = 'John Doe';
//
//        // Mock Eloquent query
//        $this->mock(User::class, function ($mock) use ($mockUser) {
//            $mock->shouldReceive('where->first')->andReturn($mockUser);
//        });

        UserProviderFacade::shouldProxyTo(UserProvider::class);

        $response = $this->post('/request-token', ['email' => 'user@example.com']);

        $response
            ->assertJson([
                'id' => 1,
                'email' => 'user@example.com',
                'name' => 'John Doe',
            ]);
    }




}
