<?php

namespace Modules\TwoFactorAuth\tests\Feature;

use Mockery;
use Modules\TwoFactorAuth\Facades\UserProviderFacade;
use Modules\TwoFactorAuth\UserProvider;
use Tests\TestCase;

class IssueTokenTest extends TestCase
{
    public function test_issue_token_route_returns_success()
    {

        $mock = \Mockery::mock(\Modules\TwoFactorAuth\UserProvider::class);
        $mock->shouldReceive('getUserByEmail')
            ->once()
            ->with('akarimi@gmail.com')
            ->andReturn('akarimi@gmail.com');

        $this->app->instance(\Modules\TwoFactorAuth\UserProvider::class, $mock);

        $response = $this->post('/request-token');

    }
}
