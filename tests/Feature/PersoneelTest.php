<?php

namespace Tests\Feature;

use App\Http\Controllers\AuthenticationController;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

// php artisan migrate:fresh --seed
// php artisan test
// seed opnieuw voor elke test


class PersoneelTest extends TestCase
{
    /**
     * Test api/oefeningen/{id}
     * @return void
     */

    public function test_oefening_op_id()
    {
        $response = $this->get('api/oefeningen/10');
        //dd($response->json());
        $response
            ->assertStatus(200)
            ->assertJsonPath('naam', 'Crunch')
            ->assertJsonPath('beschrijving', 'Ga op je rug liggen en houd je handen op je borst. Plaats je voeten op de grond voor je met je knieën op 90 graden. Til de schouders van de grond en rol rustig omhoog, waarbij je de onderrug op de grond houdt. Laat je hoofd rustig weer terugzakken en adem uit. ')
            ->assertJsonPath('created_at', null)
            ->assertJsonPath('updated_at', null);
    }

    /**
     * Test api/oefeningen?naam={naam}
     * @return void
     */

    public function test_oefening_op_naam()
    {
        $response = $this->get('api/oefeningen?naam=S');
        //dd($response->json());
        $response
            ->assertStatus(200)
            ->assertJsonCount(3)
            ->assertJsonPath('0.naam', 'Squat')
            ->assertJsonPath('0.beschrijving', 'Een squat is een oefening waarbij je je knieën buigt en je billen naar achter duwt.')
            ->assertJsonFragment(
                ['naam' => 'Push-up', 'beschrijving' => 'Ga met je buik op de grond liggen met de handen op de grond. En duw je lichaam van de grond af met alleen je armen. En herhaal dat',]
            );
    }

    /**
     * Post
     * @return void
     */

    public function test_insert_oefening()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $data = ['naam' => 'a', 'beschrijving' => 'a'];
        $response = $this->json('POST', 'api/oefeningen', $data);
        $this->assertDatabaseHas(
            'oefeningen', ['naam' => 'a', 'beschrijving' => 'a',]
        );
        $response
            ->assertStatus(201)
            ->assertJsonPath('naam', 'a')
            ->assertJsonPath('beschrijving', 'a');
    }

    /**
     * Delete
     * @return void
     */

    public function test_delete_oefening()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->delete('api/oefeningen/11');
        $response->assertStatus(200);

    }
}
