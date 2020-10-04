<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsTable extends Migration
{
public function up()
{
Schema::create('words', function (Blueprint $table) {
$table->bigIncrements('word_id');
$table->bigInteger('word_type_id');
$table->string('word');
$table->string('meaning');
$table->string('sentence');
});
}
public function down()
{
Schema::dropIfExists('words');
}
}
