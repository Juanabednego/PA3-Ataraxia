<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('image_url')->nullable(); // URL gambar
            $table->text('paragraph1')->nullable();
            $table->text('paragraph2')->nullable();
            $table->text('paragraph3')->nullable();
            $table->enum('image_position', ['left', 'right'])->default('left'); // posisi gambar
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
}

