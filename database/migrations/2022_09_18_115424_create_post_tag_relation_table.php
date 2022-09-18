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
        Schema::create('post_tag_relation', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("post_id");
            $table->unsignedInteger("tag_id");

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
        Schema::dropIfExists('post_tag_relation');
    }
};
