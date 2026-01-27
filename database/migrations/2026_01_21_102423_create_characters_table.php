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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->integer("level");
            $table->double("health")->default(100.00);
            $table->boolean("ballanced")->default(false);
            $table->text("description")->nullable();
            $table->timestamps(); //Created_at és Updated_at
            $table->softDeletes(); //deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
