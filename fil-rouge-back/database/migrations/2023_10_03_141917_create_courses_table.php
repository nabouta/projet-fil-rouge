<?php

use App\Models\Module;
use App\Models\Semester;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId("professor_id")->constrained("users");
            $table->foreignIdFor(Module::class)->constrained()->cascadeOnDelete();
            $table->float("number_of_hours");
            $table->foreignIdFor(Semester::class)->constrained()->cascadeOnDelete();
            $table->enum("status",["Process","finished"])->default("Process");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
