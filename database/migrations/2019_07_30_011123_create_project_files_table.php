<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idproject')->unsigned();
            $table->string('file_name', 30);
            $table->string('system_file_name', 60);
            $table->string('file_type', 10);
            $table->integer('file_size')->unsigned();
            $table->string('file_location');
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
        Schema::dropIfExists('project_files');
    }
}
