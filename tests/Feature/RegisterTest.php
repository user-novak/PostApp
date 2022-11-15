<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
//valida que se muestre la vista register al usuario
    public function test_user_can_see_register_view()
    {
        $validateRouteRegister = $this->get(route('register'));
        $validateRouteRegister->assertStatus(200);
    }
//valida que se agregen los datos adecuados a los campos
    public  function  test_validation_for_failed_register(){
        $failedRegister = $this->post(route('do-register'), []);
        $failedRegister->assertStatus(302);
    }
//valida que se cree un usuario
    public  function  test_register_for_successful_register(){
        $user = User::factory()->create();
        $successRegister = $this->post(route('do-register'), $user->toArray());
        $successRegister->assertStatus(302);
        $this->assertDatabaseHas('users', ['name' => $user->name]);
    }
}
