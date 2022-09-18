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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->uuid('idx')->unique()->nullable();
            $table->string("name",512);
            $table->string("slug",512);
            $table->text("content");
            $table->text("summary");

            $table->unsignedInteger('total_comment')->default(0);
            $table->unsignedInteger('total_view')->default(0);
            $table->unsignedInteger('total_like')->default(0);

            $table->unsignedInteger("published_by");
            $table->unsignedInteger("created_by");
            $table->unsignedInteger("updated_by")->nullable();

            $table->timestamp("published_at")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
