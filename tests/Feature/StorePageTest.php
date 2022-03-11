<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StorePageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_bisa_tambah_data()
    {
        $this->seed();
        $response = $this->get('/store');
        $response->assertRedirect('/');
    }

    public function test_data_muncul_di_pagination()
    {
        $this->seed();
        sleep(2);
        $response = $this->get('/store');
        $response->assertRedirect('/');
        $response = $this->get('/');
        $response->assertSeeText("Judul Baru");
        $response->assertSeeText("Berita Baru");
    }
}
