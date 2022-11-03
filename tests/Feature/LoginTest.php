<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_see_login_view()
    {
        $route = $this->get(route('login'));
        $route->assertStatus(200);
    }

    public  function  test_access_not_allowed(){
        $route = $this->get(route('posts.create'));
        $route->assertStatus(302)->assertRedirect(route('login'));
    }
}
