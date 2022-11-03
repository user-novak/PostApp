<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_the_user_can_see_home_page()
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);
    }

    public function test_the_user_can_see_about_page()
    {
        $response = $this->get(route('about'));
        $response->assertStatus(200);
    }

    public function test_the_user_can_see_contact_page()
    {
        $response = $this->get(route('contact'));
        $response->assertStatus(200);
    }
}
