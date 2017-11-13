<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('locality_id')->unsigned();
            $table->string('nombre',191);
            $table->text('descripcion',191);
            $table->date('inicio');
            $table->date('final');
            $table->string('direccion',191);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('locality_id')->references('id')->on('localitys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
