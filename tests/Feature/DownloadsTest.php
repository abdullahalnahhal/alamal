<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Downloads;

class DownloadsTest extends TestCase
{
    use DatabaseTransactions;


    /** @test*/
    public function user_can_insert_new_download()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $data  = factory('App\Downloads')->raw();

        $this->post(lRoute('admin.downloads.add'), $data);

        $this->assertCount(1, Downloads::get());
    }

    /** @test*/
    public function download_parameters_is_required_when_inserting()
    {

        $this->signIn();


        $response = $this->post(lRoute('admin.downloads.add'));

        $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
    }

    /** @test*/
    public function user_can_update_download()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $download  = factory('App\Downloads')->create();

        $data = factory('App\Downloads')->raw();

        $this->post(lRoute('admin.downloads.update', ['id' => $download->id]), $data);

        $this->assertCount(1, Downloads::where($data)->get());
    }

    /** @test*/
    public function achievement_parameters_is_required_when_updating()
    {

        $this->signIn();


        $download  = factory('App\Downloads')->create();


        $response = $this->post(lRoute('admin.downloads.update', ['id' => $download->id]));

        $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
    }

    /** @test*/
    public function user_can_delete_download()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $download  = factory('App\Downloads')->create();

        $this->delete(lRoute('admin.downloads.delete', ['id' => $download->id]));

        $this->assertCount(0, downloads::get());
    }
}
