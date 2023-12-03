<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->tinyinteger('gender')->comment('1: 男性, 2: 女性, 3: その他');
            $table->string('email', 255);
            $table->string('tell_part1', 255);
            $table->string('tell_part2', 255);
            $table->string('tell_part3', 255);
            $table->string('address', 255);
            $table->string('building', 255);
            $table->text('detail');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
