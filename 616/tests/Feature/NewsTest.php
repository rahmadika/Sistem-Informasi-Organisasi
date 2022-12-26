<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsTest extends TestCase
{
    use RefreshDatabase;

    private $makeNews;

    //ADD THIS in TestCase

    //custom method created in TestCase to get logged_in user instance.
   /* public function isLoggedIn()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }
    */

    protected function setUp(): void
    {
        parent::setUp();

        $this->makeNews = $this->post('news', [
           'name'=>'test string',
            'description'=>'some long string here',
            'image'=>'test string',
            
        ]);
    }

    /** @test */
    public function news_can_be_created() :void
    {
        #Uncomment these if you have authentication system setup
        //$this->isLoggedIn();

        $response = $this->makeNews;
        $response->assertStatus(302);

        $this->assertCount(1, News::all());
    }

    /** @test */
    public function news_can_be_deleted() :void
    {
        //$this->isLoggedIn();

        //storing news
        $this->makeNews;

        $this->assertCount(1, News::all());

        //deleting stored news
        $news = News::first();
        $news->delete('/news/' . $news->id);

        $this->assertCount(0, News::all());
    }

    /** @test */
    public function news_can_be_updated() :void
    {
        //$this->isLoggedIn();

        //storing news
        $this->makeNews;

        $this->assertCount(1, News::all());

        //updating stored news
        $news = News::first();

        $this->patch('/news/' . $news->id, [
            'name'=>'test string updated',
            'description'=>'some long string updated here',
            'image'=>'test string updated',
            
        ])->assertStatus(302);

        $this->assertNotEquals($news->name, News::first()->name);

        $this->assertCount(1, News::all());
    }

    /** @test */
    public function news_pages_are_visible() :void
    {
        //$this->isLoggedIn();

        $this->get(route('news.index'))->assertStatus(200);
        $this->get(route('news.create'))->assertStatus(200);
    }

}
