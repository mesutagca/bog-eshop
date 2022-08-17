<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_themes', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('category');
            $table->string('name');
            $table->tinyInteger('is_image')->default(0);
            $table->tinyInteger('is_main')->default(0);
            $table->tinyInteger('is_active')->default(0);
            $table->string('image_path')->nullable();
            $table->string('media_dir')->nullable();
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
        Schema::dropIfExists('my_themes');
    }
};
