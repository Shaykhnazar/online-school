<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if(!Schema::hasTable('questions')){
            Schema::create('questions', function (Blueprint $table) {
                $table->increments('id');
                $table->char('questionqategory', 3);
                $table->longText('question');
                $table->longText('answera');
                $table->longText('answerb');
                $table->longText('answerc');
                $table->longText('answerd');
                $table->unsignedSmallInteger('correct');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('questions');
    }
};
