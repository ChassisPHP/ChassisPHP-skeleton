<?php

namespace Tests\RoutesTest;

use Tests\TestCase;
use GuzzleHttp\Client;
use Symfony\Component\Process\Process;

class RoutesTest extends TestCase
{
    private $http;
    private $app;
    private static $process;

    protected function setUp(): void
    {
        $this->http = new Client(['base_uri' => 'http://localhost:8890', 'verify' => false]);
    }

    protected function tearDown(): void
    {
        $this->http = null;
    }

    public static function setUpBeforeClass(): void
    {
        $public_path = realpath(__DIR__.'/../../public');
        // League Container 3 triggers PHP 8.4 deprecations; printing them would send
        // headers early. Remove display_errors=0 once the framework moves past it.
        self::$process = new Process(['php', '-d', 'display_errors=0', '-S', 'localhost:8890', '-t', $public_path]);
        self::$process->start();
        usleep(2000000);
    }

    public static function tearDownAfterClass(): void
    {
        self::$process->stop();
    }

    public function testGet()
    {
        $response = $this->http->request('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());

        $contentType = $response->getHeader('Content-Type')[0];
        $this->assertEquals("text/html; charset=UTF-8", $contentType);
    }

    public function testRouteVariable()
    {
        $response = $this->http->request('GET', '/name/World');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertStringContainsString('Well, hello World !!', (string) $response->getBody());
    }

    public function testQueryStringDoesNotAffectRouting()
    {
        $response = $this->http->request('GET', '/about?x=1');

        $this->assertEquals(200, $response->getStatusCode());
    }
}
