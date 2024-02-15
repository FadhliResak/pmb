<?php

namespace Tests;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    public function testConnectionSuccess()
    {
        $connections = DB::connection()->getPdo();
        self::assertNotNull($connections);
    }
}
