<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('properties', function (Blueprint $table) {
        $table->id();
        $table->string('propertyType');
        $table->decimal('propertyPrice', 10, 2);
        $table->string('propertyName');
        $table->string('location');
        $table->string('posted_from');
        $table->integer('squareFit');
        $table->integer('bedNumber');
        $table->integer('bathNumber');
        $table->text('image_paths')->nullable();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
