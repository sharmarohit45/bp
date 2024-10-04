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
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->timestamps(); 
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('enquiries');
    }
};
