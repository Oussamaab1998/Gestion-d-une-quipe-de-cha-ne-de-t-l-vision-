<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdArticlToTechesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teches', function (Blueprint $table) {
          $table->integer('articl_id')->unsigned()->after('id');

          $table->foreign('articl_id')->references('id')->on('articls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teches', function (Blueprint $table) {
          $table->dropColumn('articl_id');
            $table->dropForeign(['articl_id']);
        });
    }
}
