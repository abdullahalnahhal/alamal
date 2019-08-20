<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Contacts;

class ContactsTest extends TestCase
{
    use DatabaseTransactions;


    /** @test*/
    public function user_can_update_contacts()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $data  = factory('App\Contacts')->raw();

        $this->post(lRoute('admin.contacts.update'), $data);

        $this->assertCount(1, Contacts::get());
    }
}
