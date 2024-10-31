<?php

use Tests\TestCase;

class LoggerTest extends TestCase
{
    private string $output;

    protected function setUp(): void
    {
        parent::setUp();
        ob_start(); // Починаємо буферизацію виводу
    }

    public function test_logger_email(): void
    {
        $response = $this->get('/log/email');
        $response->assertStatus(200);
        $this->assertStringContainsString('via email', ob_get_clean());
    }

    public function test_logger_db(): void
    {
        $response = $this->get('/log/db');
        $response->assertStatus(200);
        $this->assertStringContainsString('via db', ob_get_clean());
    }

    public function test_logger_file(): void
    {
        $response = $this->get('/log/file');
        $response->assertStatus(200);
        $this->assertStringContainsString('via file', ob_get_clean());
    }

    public function test_logger_default(): void
    {
        $response = $this->get('/log');
        $response->assertStatus(200);
        $this->assertStringContainsString('default type used', ob_get_clean());
    }

    public function test_logger_all(): void
    {
        $response = $this->get('/log/all');
        $response->assertStatus(200);
        $content = ob_get_clean();
        $this->assertStringContainsString('via email', $content);
        $this->assertStringContainsString('via db', $content);
        $this->assertStringContainsString('via file', $content);
    }

    public function test_logger_invalid_type(): void
    {
        $response = $this->get('/log/invalid');
        $response->assertStatus(200);
        $this->assertStringContainsString('Invalid logger type', ob_get_clean());
    }

    public function test_logger_invalid_url(): void
    {
        $response = $this->get('/invalid');
        ob_get_clean();
        $response->assertStatus(404);
    }
}
