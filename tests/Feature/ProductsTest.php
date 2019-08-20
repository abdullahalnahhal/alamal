<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Products;

class ProductsTest extends TestCase
{
     use DatabaseTransactions;


     /** @test*/
     public function user_can_insert_new_product()
     {
          $this->withoutExceptionHandling();

          $this->signIn();

          $data  = factory('App\Products')->raw();

          $this->post(lRoute('admin.products.add'), $data);

          $this->assertCount(1, Products::get());
     }
     /** @test*/
     public function user_can_update_product()
     {

          $this->withoutExceptionHandling();

          $this->signIn();


          $product = factory('App\Products')->create();


          $data  = factory('App\Products')->raw();


          $this->patch(lRoute('admin.products.update', ['product' => $product->id]), $data);


          // still one 
          $this->assertCount(1, Products::get());

          $this->assertCount(1, Products::where($data)->get());
     }

     /** @test*/
     public function product_paramters_is_required_when_inserting()
     {

          $this->signIn();


          $response = $this->post(lRoute('admin.products.add'));

          $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
     }
     /** @test*/
     public function product_paramters_is_required_when_updating()
     {

          $this->signIn();

          $product = factory('App\Products')->create();

          $response = $this->patch(lRoute('admin.products.update', ['product' => $product->id]));

          $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_path']);
     }


     /** @test*/
     public function user_can_delete_product()
     {
          $this->withoutExceptionHandling();

          $this->signIn();

          $product  = factory('App\Products')->create();

          $this->delete(lRoute('admin.products.delete', ['id' => $product->id]));

          $this->assertCount(0, Products::get());
     }
}
