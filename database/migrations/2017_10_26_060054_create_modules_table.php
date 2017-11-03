<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->string('nombre');
        
// <<<<<<< HEAD
//             $table->text('descripción');
//             $table->foreign(courses_id)->references('id')->on('courses');
// =======
//             $table->text('descripcion');
//             $table->foreign('course_id')->references('id')->on('courses');
// >>>>>>> master
//             $table->string('dias');
//             $table->dateTime('horarios');
//             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
