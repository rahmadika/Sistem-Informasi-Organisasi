<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('avatar')->nullable();
            $table->string('tmpt_lhr')->nullable();
            $table->date('tgl_lhr')->nullable();
            $table->text('address')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
        // Schema::create('comments', function (Blueprint $table) {
        //     $table->unsignedBigInteger('user_id');
        //     $table->timestamps();
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('profiles');
    }
}
