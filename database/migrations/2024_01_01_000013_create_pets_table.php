<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('species'); // dog, cat, bird, etc.
            $table->string('breed')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('sex')->nullable();
            $table->boolean('is_neutered')->default(false);
            $table->decimal('weight_kg', 5, 2)->nullable();
            $table->text('notes')->nullable(); // allergies, temperament, etc.
            $table->timestamps();

            $table->index('customer_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
