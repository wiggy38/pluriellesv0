<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();;
            $table->string("nom", 24);
            $table->string("prenoms", 24);
            $table->string("email", 24);
            $table->string("phone", 24);
            $table->string("address", 155);
            $table->string("city", 24);
            $table->string("doc_juridiq", 155);
            $table->boolean("exist_juridiq");
            $table->string("profession", 24);
            $table->string("quartier", 24);
            $table->string("ref_identite", 24);
            $table->string("situation_familiale", 24);
            $table->string("picture", 155);
            $table->boolean("active");
            $table->boolean("deleted");
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
        Schema::dropIfExists('members');
    }
};
