<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use Tests\TestCase;

class PassportTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function passport_hello_world(){
        Passport::actingAs(
            factory(User::class)->create(),
            ['create-servers']
        );

        $this
            ->followingRedirects()
            ->get('api/test')
            ->assertStatus(200)
            ->assertSee(auth()->user()->toJson());
    }
}
