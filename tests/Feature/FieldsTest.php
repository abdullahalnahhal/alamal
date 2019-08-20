<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Fields;

class FieldsTest extends TestCase
{
    use DatabaseTransactions;


    /** @test*/
    public function user_can_insert_new_field()
    {
        $this->signIn();

        $data  = factory('App\Fields')->raw();

        $this->post(lRoute('admin.fields.add'), $data);

        $this->assertCount(1, Fields::get());
    }
    /** @test*/
    public function user_can_update_field()
    {

        $this->signIn();


        $field = factory('App\Fields')->create();


        $data  = factory('App\Fields')->raw();


        $this->post(lRoute('admin.fields.update', ['field' => $field->id]), $data);


        // still one 
        $this->assertCount(1, Fields::get());

        $this->assertCount(1, Fields::where($data)->get());
    }

    /** @test*/
    public function field_paramters_is_required_when_inserting()
    {

        $this->signIn();


        $response = $this->post(lRoute('admin.fields.add'));

        $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
    }
    /** @test*/
    public function field_paramters_is_required_when_updating()
    {

        $this->signIn();

        $field = factory('App\Fields')->create();

        $response = $this->post(lRoute('admin.fields.update', ['field' => $field->id]));

        $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
    }


    /** @test*/
    public function user_can_delete_field()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $field  = factory('App\Fields')->create();

        $this->delete(lRoute('admin.fields.delete', ['id' => $field->id]));

        $this->assertCount(0, Fields::get());
    }
}
