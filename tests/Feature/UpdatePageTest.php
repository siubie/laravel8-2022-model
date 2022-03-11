<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdatePageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_bisa_update_data()
    {
        $this->seed();
        $response = $this->get('/update');
        $response->assertRedirect('/');
    }

    public function test_bisa_update_data_dan_pagination_bener()
    {
        $this->seed();
        sleep(2);
        //store dulu
        $response = $this->get('/store');
        $response->assertRedirect('/');
        //terus di update
        $response = $this->get('/update');
        $response->assertRedirect('/');
        //cek pagination
        $response = $this->get('/');
        $response->assertSeeText("Judul Baru Updated");
        $response->assertSeeText("Berita Baru Updated");
    }
}
