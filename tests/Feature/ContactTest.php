<?php

namespace Tests\Feature;

use App\Contact;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_cannot_see_contacts(){
        // $this->withoutExceptionHandling();

        $contact = factory(Contact::class)->create();

        $this
            ->get('/contacts')
            ->assertRedirect('login');
    }

    /** @test */
    public function users_cannot_see_contacts_from_another_users(){
        $contact = factory(Contact::class)->create();
        $user = factory(User::class)->create();

        $this->actingAs($user);

        $this->assertNotEquals($contact->user_id, $user->id);

        $this
            ->followingRedirects()
            ->get('contacts/'.$contact->id)
            ->assertSee('Dont hack me plz');
    }

    /** @test */
    public function users_can_see_their_own_contacts(){
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $contact = factory(Contact::class)->create();

        $this->assertEquals($contact->user_id, auth()->id());

        $this
            ->get('contacts/'.$contact->id)
            ->assertSee($contact->name)
            ->assertSee($contact->email)
            ->assertSee($contact->subject)
            ->assertSee($contact->messagfe);

    }

    /** @test */
    public function users_can_see_all_owned_contacts_in_index(){
        $user = factory(User::class)->create();
        $this->actingAs($user);

        $contacts = factory(Contact::class, 2)->create();

        $this
            ->get('contacts/')
            ->assertSee($contacts[0]->message)
            ->assertSee($contacts[1]->message);
        
    }
}
