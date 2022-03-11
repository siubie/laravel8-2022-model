<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagingShowCorrectlyTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_news_has_two_page()
    {
        $this->seed();
        $response = $this->get('/');
        //cek 2 page
        $response->assertDontSeeText('Belum ada berita');
        $response->assertSeeInOrder([1, 2]);
        $response->assertStatus(200);
        $response->assertViewHas('news');
    }

    public function test_news_pagination_works()
    {
        $this->seed();
        $response = $this->get('/?page=2');
        //cek 2 page
        $response->assertSeeInOrder([1, 2]);
        $response->assertDontSeeText('Belum ada berita');
        $response->assertStatus(200);
        $response->assertViewHas('news');
    }

    public function test_news_pagination_works_with_wrong_page()
    {
        $this->seed();
        $response = $this->get('/?page=3');
        //cek 2 page
        $response->assertSeeInOrder([1, 2]);
        $response->assertSee('Belum ada berita');
        $response->assertStatus(200);
        $response->assertViewHas('news');
    }
}
