<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Acara;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AcaraTest extends TestCase
{
    use RefreshDatabase;

    private $makeAcara;

    //ADD THIS in TestCase

    //custom method created in TestCase to get logged_in user instance.
   /* public function isLoggedIn()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }
    */

    protected function setUp(): void
    {
        parent::setUp();

        $this->makeAcara = $this->post('acaras', [
           'name'=>'test string',
            'description'=>'some long string here',
            'date'=>'enter value here',
            'place'=>'some long string here',
            
        ]);
    }

    /** @test */
    public function acara_can_be_created() :void
    {
        #Uncomment these if you have authentication system setup
        //$this->isLoggedIn();

        $response = $this->makeAcara;
        $response->assertStatus(302);

        $this->assertCount(1, Acara::all());
    }

    /** @test */
    public function acara_can_be_deleted() :void
    {
        //$this->isLoggedIn();

        //storing acara
        $this->makeAcara;

        $this->assertCount(1, Acara::all());

        //deleting stored acara
        $acara = Acara::first();
        $acara->delete('/acaras/' . $acara->id);

        $this->assertCount(0, Acara::all());
    }

    /** @test */
    public function acara_can_be_updated() :void
    {
        //$this->isLoggedIn();

        //storing acara
        $this->makeAcara;

        $this->assertCount(1, Acara::all());

        //updating stored acara
        $acara = Acara::first();

        $this->patch('/acaras/' . $acara->id, [
            'name'=>'test string updated',
            'description'=>'some long string updated here',
            'date'=>'enter value here',
            'place'=>'some long string updated here',
            
        ])->assertStatus(302);

        $this->assertNotEquals($acara->name, Acara::first()->name);

        $this->assertCount(1, Acara::all());
    }

    /** @test */
    public function acara_pages_are_visible() :void
    {
        //$this->isLoggedIn();

        $this->get(route('acaras.index'))->assertStatus(200);
        $this->get(route('acaras.create'))->assertStatus(200);
    }

}
