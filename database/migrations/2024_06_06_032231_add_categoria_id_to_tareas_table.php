<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompletadaToTareasTable extends Migration
{
    public function up()
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->foreignId('categoria_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
            $table->dropColumn('completada');
        });
    }
}
