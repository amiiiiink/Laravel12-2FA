<?php

namespace Modules\TwoFactorAuth\Tests\Feature;

use Tests\TestCase;

class IssueTokenTest extends TestCase
{
    public function test_issue_token_without_hitting_database()
    {
        $response = $this->post('/request-token', ['email' => 'user@example.com']);
        $response->assertStatus(200);
        $response->assertSeeText('user@example.com');
    }
}
