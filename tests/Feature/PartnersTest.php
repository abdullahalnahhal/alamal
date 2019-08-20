<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Partners;

class PartnersTest extends TestCase
{
     use DatabaseTransactions;


     /** @test*/
     public function user_can_insert_new_partner()
     {
          $this->signIn();

          $data  = factory('App\Partners')->raw();

          $this->post(lRoute('admin.partners.add'), $data);

          $this->assertCount(1, Partners::get());
     }
     /** @test*/
     public function user_can_update_partner()
     {

          $this->withoutExceptionHandling();

          $this->signIn();


          $partner = factory('App\Partners')->create();


          $data  = factory('App\Partners')->raw();


          $this->patch(lRoute('admin.partners.update', ['partner' => $partner->id]), $data);


          // still one 
          $this->assertCount(1, Partners::get());

          $this->assertCount(1, Partners::where($data)->get());
     }

     /** @test*/
     public function partner_paramters_is_required_when_inserting()
     {

          $this->signIn();


          $response = $this->post(lRoute('admin.partners.add'));

          $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
     }
     /** @test*/
     public function partner_paramters_is_required_when_updating()
     {

          $this->signIn();

          $partner = factory('App\Partners')->create();

          $response = $this->patch(lRoute('admin.partners.update', ['partner' => $partner->id]));

          $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
     }


     /** @test*/
     public function user_can_delete_partner()
     {
          $this->withoutExceptionHandling();

          $this->signIn();

          $partner  = factory('App\Partners')->create();

          $this->delete(lRoute('admin.partners.delete', ['id' => $partner->id]));

          $this->assertCount(0, Partners::get());
     }
}
