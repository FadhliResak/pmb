<?php

namespace Tests\Http\Controllers;

use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function testViewLogin()
    {
        $this->get('/login')
            ->assertSeeText('Login Administrator')
            ->assertSeeText('Username')
            ->assertSeeText('Password');
    }
}
