<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Achievements;

class AchievementsTest extends TestCase
{
    use DatabaseTransactions;


    /** @test*/
    public function user_can_insert_new_achievement()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $data  = factory('App\Achievements')->raw();

        $this->post(lRoute('admin.achievements.add'), $data);

        $this->assertCount(1, Achievements::get());
    }

    /** @test*/
    public function achievement_parameters_is_required_when_inserting()
    {

        $this->signIn();


        $response = $this->post(lRoute('admin.achievements.add'));

        $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_name']);
    }

    /** @test*/
    public function user_can_update_achievement()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $achievement  = factory('App\Achievements')->create();

        $data = factory('App\Achievements')->raw();

        $this->post(lRoute('admin.achievements.update', ['id' => $achievement->id]), $data);

        $this->assertCount(1, Achievements::where($data)->get());
    }

    /** @test*/
    public function achievement_parameters_is_required_when_updating()
    {

        $this->signIn();


        $achievement  = factory('App\Achievements')->create();


        $response = $this->post(lRoute('admin.achievements.update', ['id' => $achievement->id]));

        $response->assertSessionHasErrors(['text_ar', 'text_en', 'title_ar', 'title_en', 'file_name']);
    }


    /** @test*/
    public function user_can_delete_achievement()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $achievement  = factory('App\Achievements')->create();

        $this->delete(lRoute('admin.achievements.delete', ['id' => $achievement->id]));

        $this->assertCount(0, Achievements::get());
    }
}
