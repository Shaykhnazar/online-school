<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if(!Schema::hasTable('categories')){
            Schema::create('categories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('categoryname');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
