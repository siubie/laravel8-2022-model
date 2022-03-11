<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeletePageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_bisa_delete()
    {
        //seed data
        $this->seed();
        // buka halaman delete
        $response = $this->get('/destroy');
        //pastikan redirect bener
        $response->assertRedirect('/');
    }

    public function test_data_bisa_di_isi_dan_di_delete()
    {
        $this->seed();
        sleep(2);
        $response = $this->get('/store');
        $response->assertRedirect('/');
        $response = $this->get('/');
        $response->assertSeeText("Judul Baru");
        $response->assertSeeText("Berita Baru");
        $response = $this->get('/destroy');
        $response->assertRedirect('/');
        $response->assertDontSeeText("Judul Baru");
        $response->assertDontSeeText("Berita Baru");
    }
}
