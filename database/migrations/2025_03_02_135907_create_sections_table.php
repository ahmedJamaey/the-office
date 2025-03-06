<?php

use App\Models\Section;
use App\Models\Template;
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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->string('blade');
            $table->jsonb('data')->nullable();
            $table->timestamps();
        });

        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->timestamps();
        });

        Schema::create('section_template', function (Blueprint $table) {
           $table->foreignIdFor(Section::class)
               ->constrained('sections')
               ->cascadeOnDelete();
            $table->foreignIdFor(Template::class)
                ->constrained('templates')
                ->cascadeOnDelete();
            $table->unsignedInteger('order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
        Schema::dropIfExists('template');
        Schema::dropIfExists('section_template');
    }
};
