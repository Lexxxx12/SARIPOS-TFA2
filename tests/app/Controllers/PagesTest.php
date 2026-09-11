<?php

namespace Tests\App\Controllers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class PagesTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testAllPublicPagesLoad(): void
    {
        foreach (['/', '/about', '/customers', '/users'] as $path) {
            $this->get($path)->assertOK();
        }
    }

    public function testCustomerDirectoryRendersStaticRecords(): void
    {
        $result = $this->get('/customers');

        $result->assertSee('Andrea Santos');
        $result->assertSee('rafael.lim@example.com');
    }

    public function testUserDirectoryRendersStaticRecords(): void
    {
        $result = $this->get('/users');

        $result->assertSee('admin.mara');
        $result->assertSee('Supervisor');
    }
}
