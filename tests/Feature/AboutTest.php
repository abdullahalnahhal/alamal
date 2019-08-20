<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\TextWord;
use App\AboutSections;

class AboutTest extends TestCase
{
    use RefreshDatabase;


    /** @test*/
    public function user_can_insert_new_text_word()
    {
        $this->signIn();

        $data  = factory('App\TextWord')->raw();

        $this->post(lRoute('admin.about.add-word'), $data);

        $this->assertCount(1, TextWord::get());
    }
    /** @test*/
    public function user_can_update_text_word()
    {

        $this->signIn();


        factory('App\TextWord')->create();


        $data  = factory('App\TextWord')->raw();


        $this->post(lRoute('admin.about.add-word'), $data);


        // still one 
        $this->assertCount(1, TextWord::get());
    }

    /** @test*/
    public function about_text_is_required()
    {

        $this->signIn();


        $response = $this->post(lRoute('admin.about.add-word'));

        $response->assertSessionHasErrors(['text_ar', 'text_en']);
    }



    /** @test*/
    public function user_can_insert_new_section()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $data  = factory('App\AboutSections')->raw();

        $this->post(lRoute('admin.about.add-section'), $data);

        $this->assertCount(1, AboutSections::get());
    }

    /** @test*/
    public function section_parameters_is_required()
    {

        $this->signIn();


        $response = $this->post(lRoute('admin.about.add-section'));

        $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
    }



    /** @test*/
    public function user_can_delete_section()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $section  = factory('App\AboutSections')->create();

        $this->delete(lRoute('admin.about.delete-section', ['id' => $section->id]));

        $this->assertCount(0, AboutSections::get());
    }
}
