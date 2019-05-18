<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
       {
           Schema::create('profile', function (Blueprint $table) {
              
               $table->string('name');
               $table->string('gender');
               $table->string('hoby');
               $table->string('introduction');

           });
       }

       public function down()
       {
           Schema::dropIfExists('profile');
      }
}
