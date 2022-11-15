<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewsTest extends TestCase
{
    //valida que se muestre la vista home al usuario
    public function test_the_user_can_see_home_page()
    {
        $validateRouteHome = $this->get(route('home'));
        $validateRouteHome->assertStatus(200);
    }

//valida que se muestre la vista about al usuario
    public function test_the_user_can_see_about_page()
    {
        $validateRouteAbout = $this->get(route('about'));
        $validateRouteAbout->assertStatus(200);
    }

//valida que se muestre la vista contact al usuario
    public function test_the_user_can_see_contact_page()
    {
        $validateRouteContact = $this->get(route('contact'));
        $validateRouteContact->assertStatus(200);
    }
}
