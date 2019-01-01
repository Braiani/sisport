<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterVisibilidadeColumnName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portarias', function (Blueprint $table) {
            $table->renameColumn('visibilidade', 'restrito');
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
            $table->renameColumn('restrito', 'visibilidade');
        });
    }
}
