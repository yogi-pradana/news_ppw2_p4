<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->text('content'); 
            $table->date('news_date')->default(DB::raw('CURRENT_DATE')); 
            $table->string('status')->default('draft');
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
