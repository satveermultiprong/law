<?php

// database/migrations/2024_09_20_000001_create_lawyers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersTable extends Migration
{
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('password');
            $table->string('license_number')->nullable();
            $table->string('documents')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('gender')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('alternate_mobile')->nullable();
            $table->string('profile_image')->nullable();
            $table->unsignedBigInteger('specialization_id')->nullable();
            $table->unsignedBigInteger('court_type_id')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('specialization_id')->references('id')->on('specializations');
            $table->foreign('court_type_id')->references('id')->on('court_types');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lawyers');
    }
}
