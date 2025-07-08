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
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->id();

            // ✅ FIXED: 'countries' instead of 'countires'
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->foreignId('service_id')->nullable()->constrained('services')->onDelete('cascade');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->longText('what_to_expect')->nullable();
            $table->longText('itinerary')->nullable();

            $table->string('duration')->nullable(); // e.g., "12 Days"
            $table->enum('difficulty', ['easy', 'moderate', 'hard'])->nullable();
            $table->integer('max_elevation')->nullable();
            $table->string('best_season')->nullable();
            $table->string('pickup')->default('Tribhuvan International Airport (KTM)');
            $table->string('drop')->default('Tribhuvan International Airport (KTM)');
            $table->string('end_point')->nullable();
            $table->string('start_point')->nullable();

            $table->json('price_includes')->nullable();
            $table->json('images')->nullable();
            $table->json('price_excludes')->nullable();

            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_packages');
    }
};
