<?php

namespace Codeat3\LaravelMindchow\Tests;

use Orchestra\Testbench\TestCase;
use Codeat3\LaravelMindchow\LaravelMindchowServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelMindchowServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
