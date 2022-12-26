<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Anggota;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnggotaTest extends TestCase
{
    use RefreshDatabase;

    private $makeAnggota;

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

        $this->makeAnggota = $this->post('anggotas', [
           'name'=>'test string',
            'tgl_lhr'=>'enter value here',
            'address'=>'some long string here',
            'ig'=>'test string',
            
        ]);
    }

    /** @test */
    public function anggota_can_be_created() :void
    {
        #Uncomment these if you have authentication system setup
        //$this->isLoggedIn();

        $response = $this->makeAnggota;
        $response->assertStatus(302);

        $this->assertCount(1, Anggota::all());
    }

    /** @test */
    public function anggota_can_be_deleted() :void
    {
        //$this->isLoggedIn();

        //storing anggota
        $this->makeAnggota;

        $this->assertCount(1, Anggota::all());

        //deleting stored anggota
        $anggota = Anggota::first();
        $anggota->delete('/anggotas/' . $anggota->id);

        $this->assertCount(0, Anggota::all());
    }

    /** @test */
    public function anggota_can_be_updated() :void
    {
        //$this->isLoggedIn();

        //storing anggota
        $this->makeAnggota;

        $this->assertCount(1, Anggota::all());

        //updating stored anggota
        $anggota = Anggota::first();

        $this->patch('/anggotas/' . $anggota->id, [
            'name'=>'test string updated',
            'tgl_lhr'=>'enter value here',
            'address'=>'some long string updated here',
            'ig'=>'test string updated',
            
        ])->assertStatus(302);

        $this->assertNotEquals($anggota->name, Anggota::first()->name);

        $this->assertCount(1, Anggota::all());
    }

    /** @test */
    public function anggota_pages_are_visible() :void
    {
        //$this->isLoggedIn();

        $this->get(route('anggotas.index'))->assertStatus(200);
        $this->get(route('anggotas.create'))->assertStatus(200);
    }

}
