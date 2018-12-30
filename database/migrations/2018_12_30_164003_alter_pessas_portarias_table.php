<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPessasPortariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoas_portarias', function (Blueprint $table) {
            $table->date('data_relatorio')->nullable();
            $table->string('entregou_relatorio')->nullable();
            $table->string('declaracao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoas_portarias', function (Blueprint $table) {
            $table->dropColumn('data_relatorio');
            $table->dropColumn('entregou_relatorio');
            $table->dropColumn('declaracao');
        });
    }
}
