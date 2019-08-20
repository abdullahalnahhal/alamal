<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\SubFields;

class SubFieldsTest extends TestCase
{
     use DatabaseTransactions;


     /** @test*/
     public function user_can_insert_new_field()
     {
          $this->signIn();

          $data  = factory('App\SubFields')->raw();

          $this->post(lRoute('admin.sub-fields.add'), $data);

          $this->assertCount(1, SubFields::get());
     }
     /** @test*/
     public function user_can_update_field()
     {

          $this->signIn();


          $field = factory('App\SubFields')->create();


          $data  = factory('App\SubFields')->raw();


          $this->post(lRoute('admin.sub-fields.update', ['field' => $field->id]), $data);


          // still one 
          $this->assertCount(1, SubFields::get());

          $this->assertCount(1, SubFields::where($data)->get());
     }

     /** @test*/
     public function field_paramters_is_required_when_inserting()
     {

          $this->signIn();


          $response = $this->post(lRoute('admin.sub-fields.add'));

          $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
     }
     /** @test*/
     public function field_paramters_is_required_when_updating()
     {

          $this->signIn();

          $field = factory('App\SubFields')->create();

          $response = $this->post(lRoute('admin.sub-fields.update', ['field' => $field->id]));

          $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
     }


     /** @test*/
     public function user_can_delete_field()
     {
          $this->withoutExceptionHandling();

          $this->signIn();

          $field  = factory('App\SubFields')->create();

          $this->delete(lRoute('admin.sub-fields.delete', ['id' => $field->id]));

          $this->assertCount(0, SubFields::get());
     }
}
