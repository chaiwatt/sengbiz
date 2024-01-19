<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->default(1);
            $table->unsignedBigInteger('main_category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->unsignedBigInteger('sub_minor_category_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('org_slug');
            $table->string('org_title');
            $table->double('price',20,0)->default(0);
            $table->string('description');
            $table->longText('body');
            $table->char('need_broker',1)->default(0);
            $table->char('is_ads',1)->default(0);
            $table->char('indexing_code',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
