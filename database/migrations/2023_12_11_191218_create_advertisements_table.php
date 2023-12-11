<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('location');
            $table->string('company_name');
            $table->integer('male_required')->default(0);
            $table->integer('female_required')->default(0);
            $table->string('minimun_qualification');
            $table->text('job_description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
