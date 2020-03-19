<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->boolean('civilite')->nullable()->default(null);
            $table->string('prenom', 256);
            $table->string('nom', 256);
            $table->string('tel', 256)->nullable()->default(null);
            $table->string('email', 256);
            $table->string('societe', 256)->nullable()->default(null);
            $table->string('ville', 256)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
