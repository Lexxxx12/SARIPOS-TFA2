<?php

namespace Tests\App\Controllers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use Tests\Support\Database\Seeds\SariposSeeder;

class PagesTest extends CIUnitTestCase
{
    use FeatureTestTrait;
    use DatabaseTestTrait;

    protected $seed = SariposSeeder::class;

    public function testAllPublicPagesLoad(): void
    {
        foreach (['/', '/about', '/customers', '/users'] as $path) {
            $this->get($path)->assertOK();
        }
    }

    public function testCustomerDirectoryRendersDatabaseRecords(): void
    {
        $result = $this->get('/customers');

        $result->assertSee('Andrea Santos');
        $result->assertSee('rafael.lim@example.com');
    }

    public function testUserDirectoryRendersDatabaseRecords(): void
    {
        $result = $this->get('/users');

        $result->assertSee('admin.mara');
        $result->assertSee('Samuel Aquino');
    }
}
