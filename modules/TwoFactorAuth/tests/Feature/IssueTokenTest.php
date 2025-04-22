<?php

namespace Modules\TwoFactorAuth\tests\Feature;

use Modules\TwoFactorAuth\Facades\UserProviderFacade;
use Modules\TwoFactorAuth\UserProvider;
use Tests\TestCase;

class IssueTokenTest extends TestCase
{
    public function test_issue_token_route_returns_success()
    {
        $response = $this->post('/request-token');
        UserProviderFacade::shouldReceive('aaa');
        $response->assertStatus(200);
        $response->assertSee('Token issued');
    }
}
