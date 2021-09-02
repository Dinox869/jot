<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{

    use RefreshDatabase;
   /** @test */
    public function a_contact_can_be_tested()
    {
        $this->withoutExceptionHandling();

        $this->post('/api/contacts',[
            'name'=>'Test Name',
            'email'=>'Jamesdennis869@gmail.com',
            'date'=>'01/09/1998',
            'company'=>'Busy.com'
        ]);

        $contact = Contact::first();

        $this->assertCount(1, Contact::all());

        $this->assertEquals('Test Name',$contact->name);
        $this->assertEquals('Jamesdennis869@gmail.com',$contact->email);
        $this->assertEquals('01/09/1998',$contact->date);
        $this->assertEquals('Busy.com',$contact->company);

    }
}
