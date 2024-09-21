<?php

// database/migrations/2024_09_20_000003_create_court_types_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtTypesTable extends Migration
{
    public function up()
    {
        Schema::create('court_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('court_types');
    }
}

