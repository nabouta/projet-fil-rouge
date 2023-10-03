<?php

use App\Models\Classroom;
use App\Models\Course;
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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->time("Start_time");
            $table->time("End_time");
            $table->date("date");
            $table->float("duration")->nullable();
            $table->foreignIdFor(Course::class)->constrained()->cascadeOnDelete();
            $table->enum("status",["Invalid","Valid"])->default("Invalid");
            $table->foreignIdFor(Classroom::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
