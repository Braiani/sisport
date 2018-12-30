<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPortariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portarias', function (Blueprint $table) {
            $table->dropColumn('periodicidades_id');
            $table->dropColumn('prev_renovacao');
            $table->dropColumn('revoga_port');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portarias', function (Blueprint $table) {
            $table->integer('periodicidades_id')->unsigned();
            $table->date('prev_renovacao')->nullable();
            $table->string('revoga_port')->nullable();
        });
    }
}
