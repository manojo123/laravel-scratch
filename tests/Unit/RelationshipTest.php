<?php

namespace Tests\Unit;

use App\Contact;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RelationshipTest extends TestCase
{
	use RefreshDatabase;

	/** @test */
	public function an_user_has_many_contacts(){
		$this->withoutExceptionHandling();
		
		$user = factory(User::class)->create();
		$contact = factory(Contact::class)->create(['user_id' => $user->id]);

		$this->assertEquals($user->contacts[0]->id, $contact->id);
	}

	/** @test */
	public function a_contact_belongs_to_an_user(){
		$this->withoutExceptionHandling();
		
		$user = factory(User::class)->create();
		$contact = factory(Contact::class)->create(['user_id' => $user->id]);

		$this->assertEquals($contact->user->id, $user->id);
	}
}
