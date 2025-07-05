<?php

use App\Models\TourPackage;
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
        Schema::create('itineraries', function (Blueprint $table) {
        $table->id();
        $table->foreignId('tour_package_id')->constrained()->onDelete('cascade');
        $table->unsignedInteger('day_number');
        $table->string('title')->nullable();
        $table->text('description');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itenaries');
    }
};
