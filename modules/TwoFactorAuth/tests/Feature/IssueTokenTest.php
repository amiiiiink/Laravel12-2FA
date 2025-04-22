<?php

namespace Modules\TwoFactorAuth\tests\Feature;

use Tests\TestCase;

class IssueTokenTest extends TestCase
{
    public function test_issue_token_route_returns_success()
    {
        $response = $this->get('/request-token');

        $response->assertStatus(200);
        $response->assertSee('Token issued');
    }
}
