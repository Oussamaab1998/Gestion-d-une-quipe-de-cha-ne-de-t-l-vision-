<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOthercolToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function($table) {
          $table->string('prenom');
          $table->longText('roles');
          $table->integer('cin');
          $table->integer('telephone');
          $table->string('photo');
          $table->string('adresse');
          $table->integer('enabled');
          $table->string('salt');
          $table->date('last-login');
          $table->string('username_canonical');
          $table->string('email_canonical');
          $table->date('password_requested_at');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
