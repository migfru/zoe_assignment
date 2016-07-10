<?php


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Client;

class ClientsTest extends TestCase
{

    public function test_clients_list()
    {
        //When
        $this->visit('clients')
            ->see('Michael');
    }
}
