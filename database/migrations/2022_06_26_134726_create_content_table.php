<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if(!Schema::hasTable('content')){
            Schema::create('content', function (Blueprint $table) {
                $table->increments('id');
                $table->longText('introtext');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('content');
    }
};
