<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Slider;

class SliderTest extends TestCase
{
     use DatabaseTransactions;


     /** @test*/
     public function user_can_insert_new_partner()
     {
          $this->signIn();

          $data  = factory('App\Slider')->raw();

          $this->post(lRoute('admin.slider.add'), $data);

          $this->assertCount(1, Slider::get());
     }
     /** @test*/
     public function user_can_update_partner()
     {

          $this->withoutExceptionHandling();

          $this->signIn();


          $partner = factory('App\Slider')->create();


          $data  = factory('App\Slider')->raw();


          $this->patch(lRoute('admin.slider.update', ['partner' => $partner->id]), $data);


          // still one 
          $this->assertCount(1, Slider::get());

          $this->assertCount(1, Slider::where($data)->get());
     }

     /** @test*/
     public function partner_paramters_is_required_when_inserting()
     {

          $this->signIn();


          $response = $this->post(lRoute('admin.slider.add'));

          $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
     }
     /** @test*/
     public function partner_paramters_is_required_when_updating()
     {

          $this->signIn();

          $partner = factory('App\Slider')->create();

          $response = $this->patch(lRoute('admin.slider.update', ['partner' => $partner->id]));

          $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
     }


     /** @test*/
     public function user_can_delete_partner()
     {
          $this->withoutExceptionHandling();

          $this->signIn();

          $partner  = factory('App\Slider')->create();

          $this->delete(lRoute('admin.slider.delete', ['id' => $partner->id]));

          $this->assertCount(0, Slider::get());
     }
}
