<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }

    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('question');
            $table->text('answer');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('faq_categories')->onDelete('cascade');
        });
    }

};
