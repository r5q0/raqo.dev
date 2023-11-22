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
        Schema::create('blog', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->longtext('blog');
            $table->date('date')->default(now()->toDateString());
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
