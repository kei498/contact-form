<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   public function test_contact_form_is_displayed()
{
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('お問い合わせ');
}
}
