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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('property_name');
            $table->string('property_location');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->timestamps(); // Optional: adds created_at and updated_at
        });
    }
    
    public function down()
    {
        // Drop the 'enquiries' table
        Schema::dropIfExists('enquiries');
    }
};
