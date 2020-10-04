<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordTypesTable extends Migration
{
public function up()
{
Schema::create('word__types', function (Blueprint $table) {
$table->bigIncrements('word_type_id');
$table->string('type');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('word__types');
}
}
