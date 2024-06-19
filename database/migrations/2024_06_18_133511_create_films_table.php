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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->foreignId("film_category_id");
            $table->string("title");
            $table->text("description");
            $table->string("production");
            $table->date("release_date");
            $table->text("url_trailer")->nullable();
            $table->enum("region", ["english", "indonesia", "eropa", "japan"]);
            $table->integer("duration");
            $table->string("poster");
            $table->string("banner");
            $table->boolean("is_free");
            $table->decimal("price", 12, 2)->nullable();
            $table->integer("rating")->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
