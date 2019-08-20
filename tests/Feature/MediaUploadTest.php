<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class AchievementsTest extends TestCase
{
     use DatabaseTransactions;


     /** @test*/
     public function user_can_upload_file()
     {
          Storage::fake('local');

          $this->withoutExceptionHandling();

          $this->signIn();

          $response = $this->postJson(lRoute('admin.media.upload'), [
               'file' => UploadedFile::fake()->image('image.jpg')
          ])->json();

          Storage::disk('local')->assertExists($response['name']);
     }
     /** @test*/
     public function user_can_delete_file()
     {
          Storage::fake('local');

          $this->withoutExceptionHandling();

          $this->signIn();

          $response = $this->postJson(lRoute('admin.media.upload'), [
               'file' => UploadedFile::fake()->image('image.jpg')
          ])->json();


          $this->delete(lRoute('admin.media.remove'), ['file_name' => $response['name']]);


          Storage::disk('local')->assertMissing($response['name']);
     }
}
