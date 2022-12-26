<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Transaction;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TransactionTest extends TestCase
{
    use RefreshDatabase;

    private $makeTransaction;

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

        $this->makeTransaction = $this->post('transactions', [
           'debit'=>1,
            'nd'=>'test string',
            'kredit'=>1,
            'nk'=>'test string',
            'saldo'=>1,
            
        ]);
    }

    /** @test */
    public function transaction_can_be_created() :void
    {
        #Uncomment these if you have authentication system setup
        //$this->isLoggedIn();

        $response = $this->makeTransaction;
        $response->assertStatus(302);

        $this->assertCount(1, Transaction::all());
    }

    /** @test */
    public function transaction_can_be_deleted() :void
    {
        //$this->isLoggedIn();

        //storing transaction
        $this->makeTransaction;

        $this->assertCount(1, Transaction::all());

        //deleting stored transaction
        $transaction = Transaction::first();
        $transaction->delete('/transactions/' . $transaction->id);

        $this->assertCount(0, Transaction::all());
    }

    /** @test */
    public function transaction_can_be_updated() :void
    {
        //$this->isLoggedIn();

        //storing transaction
        $this->makeTransaction;

        $this->assertCount(1, Transaction::all());

        //updating stored transaction
        $transaction = Transaction::first();

        $this->patch('/transactions/' . $transaction->id, [
            'debit'=>10,
            'nd'=>'test string updated',
            'kredit'=>10,
            'nk'=>'test string updated',
            'saldo'=>10,
            
        ])->assertStatus(302);

        $this->assertNotEquals($transaction->debit, Transaction::first()->debit);

        $this->assertCount(1, Transaction::all());
    }

    /** @test */
    public function transaction_pages_are_visible() :void
    {
        //$this->isLoggedIn();

        $this->get(route('transactions.index'))->assertStatus(200);
        $this->get(route('transactions.create'))->assertStatus(200);
    }

}
