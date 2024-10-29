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
        Schema::disableForeignKeyConstraints();

        Schema::create('professional_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professional_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->decimal('price', 7, 2);
            $table->integer('duration');
            $table->string('softDeletes');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_services');
    }
};
