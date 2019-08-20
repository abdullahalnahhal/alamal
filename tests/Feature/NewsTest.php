<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\News;

class NewsTest extends TestCase
{
    use RefreshDatabase;


    /** @test*/
    public function user_can_insert_new_news()
    {
        $this->signIn();

        $data  = factory('App\News')->raw();

        $this->post(lRoute('admin.news.add'), $data);

        $this->assertCount(1, News::get());
    }
    /** @test*/
    public function user_can_update_news()
    {

        $this->withoutExceptionHandling();

        $this->signIn();


        $news = factory('App\News')->create();


        $data  = factory('App\News')->raw();


        $this->patch(lRoute('admin.news.update', ['news' => $news->id]), $data);


        // still one 
        $this->assertCount(1, News::get());

        $this->assertCount(1, News::where($data)->get());
    }

    /** @test*/
    public function news_paramters_is_required_when_inserting()
    {

        $this->signIn();


        $response = $this->post(lRoute('admin.news.add'));

        $response->assertSessionHasErrors(['text', 'title', 'published', 'file_path']);
    }
    /** @test*/
    public function news_paramters_is_required_when_updating()
    {

        $this->signIn();

        $news = factory('App\News')->create();

        $response = $this->patch(lRoute('admin.news.update', ['news' => $news->id]));

        $response->assertSessionHasErrors(['text', 'title', 'published', 'file_path']);
    }


    /** @test*/
    public function user_can_delete_news()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $news  = factory('App\News')->create();

        $this->delete(lRoute('admin.news.delete', ['id' => $news->id]));

        $this->assertCount(0, News::get());
    }
}
