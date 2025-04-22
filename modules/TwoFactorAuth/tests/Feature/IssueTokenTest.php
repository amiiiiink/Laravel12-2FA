<?php

namespace Modules\TwoFactorAuth\tests\Feature;

use Mockery;
use Modules\TwoFactorAuth\Contracts\UserProviderInterface;
use Modules\TwoFactorAuth\Facades\UserProviderFacade;
use Modules\TwoFactorAuth\UserProvider;
use Tests\TestCase;

class IssueTokenTest extends TestCase
{
    public function test_issue_token_route_returns_success()
    {

        $mock = \Mockery::mock(UserProviderInterface::class);
        $mock->shouldReceive('getUserByEmail')
            ->once()
            ->with('akarimi@gmail.com')
            ->andReturn('akarimi@gmail.com');

        $this->app->instance(\Modules\TwoFactorAuth\Contracts\UserProviderInterface::class, $mock);


        $response = $this->post('/request-token');

    }
}
