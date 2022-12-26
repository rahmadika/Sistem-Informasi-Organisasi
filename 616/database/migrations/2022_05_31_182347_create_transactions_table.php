<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            
            $table->id();
            $table->integer('debit')->nullable();
            $table->string('nd')->nullable();
            $table->integer('kredit')->nullable();
            $table->bigInteger('nk')->unsigned()->nullable();
            $table->integer('saldo');
            $table->foreign('nk')->references('id')->on('acaras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('transactions');
    }
}
