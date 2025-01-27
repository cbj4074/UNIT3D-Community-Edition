<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FollowController
 */
class FollowControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $follow = factory(\App\Models\Follow::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->delete(route('follow.destroy', ['username' => $follow->username]));

        $response->assertRedirect(withSuccess('You are no longer following '.$user->username));
        $this->assertDeleted($follow);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $follow = factory(\App\Models\Follow::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->post(route('follow.store', ['username' => $follow->username]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors('Nice try, but sadly you can not follow yourself.'));

        // TODO: perform additional assertions
    }

    // test cases...
}
