<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutPageTest extends TestCase
{
    public function test_about_page_is_accessible(): void
    {
        $this->get('/tentang')
            ->assertOk()
            ->assertSee('<title>Tentang</title>', false)
            ->assertSee('Regu Kancil Studio');
    }
}
