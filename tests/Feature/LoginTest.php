<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
//valida que se muestre la vista login al usuario
    public function test_user_can_see_login_view()
    {
        $validateRouteLogin = $this->get(route('login'));
        $validateRouteLogin->assertStatus(200);
    }
//valida que el usuario este logeado
    public  function  test_access_not_allowed(){
        $validateLogin = $this->get(route('posts.create'));
        $validateLogin->assertStatus(302)->assertRedirect(route('login'));
    }
}
